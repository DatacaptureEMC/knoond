<?php

/**
 * Versie 1 - augustus 2017
 * 
 * Script voor de YSR (Zelf in te vullen vragenlijst voor 11-18 jarigen)
 * Dit script haalt T-scores op uit de YSR-stamtabel voor de 6 DSM-Schalen, 8 Syndroomschalen, Schaal Internaliseren, Schaal Externaliseren en de Totaalscore.
 * Vervolgens wordt bepaald in welk gebied de score zich bevind; Normaal, Borderline of Klinisch
 */

class Knoond_Event_Survey_Completed_YSRv1 extends \EMC_Event_SurveyCompletedEventAbstract {

    /**
     * Can hold the tokenAnswers for easy passing around to helper methods
     * 
     * @var Array
     */
    protected $tokenAnswers;

    /**
     * A pretty name for use in dropdown selection boxes.
     *
     * @return string Name
     */
    public function getEventName() {
        return "YSR berekening v1 (KNO Onderzoek)";
    }

    /*
     * Determines in what range the T-score lies
     * @param $Score: T-score, $Max: upper borderline T-score, $Min: lower borderline T-score
     * @return string range
     */
    private function getDiagnoseText($Score, $Max, $Min){
        if ($Score > $Max){
            $s ='Klinisch';
        }
        elseif($Score < $Min){
            $s ='Normaal';
        }
        else{
            $s ='Borderline';
        }
        return $s;
    }
    
    /**
     * Process the data and return the answers that should be changed.
     *
     * Storing the changed values is handled by the calling function.
     *
     * @param \Gems_Tracker_Token $token Gems token object
     * @return array Containing the changed values
     */
    public function processTokenData(\Gems_Tracker_Token $token) {
        $tokenAnswers       = $token->getRawAnswers();
        $this->tokenAnswers = $tokenAnswers;
        $results            = array();
        
        // Versie
        $scriptVersie = 1;
        $stamtabelVersie = 0;

        // Patientgegevens
        $Age = $token->getRespondent()->getAge($token->getCompletionTime());
        $Gender = $token->getRespondent()->getGender();
        $AgeComment = "";

        if ($Age < 11) {
            $Age = 11;
            $AgeComment = "Patient is jonger dan 11 jaar: normering voor 11-18 jarigen toegepast.";
        } elseif ($Age > 18) {
            $Age = 18;
            $AgeComment = "Patient is ouder dan 18 jaar: normering voor 11-18 jarigen toegepast.";
        }

        // Schaalscores
        $DSM1_SS = $tokenAnswers['SCOREYSRDSM1'];
        $DSM2_SS = $tokenAnswers['SCOREYSRDSM2'];
        $DSM3_SS = $tokenAnswers['SCOREYSRDSM3'];
        $DSM4_SS = $tokenAnswers['SCOREYSRDSM4'];
        $DSM5_SS = $tokenAnswers['SCOREYSRDSM5'];
        $DSM6_SS = $tokenAnswers['SCOREYSRDSM6'];
        $SYNI_SS = $tokenAnswers['SCOREYSRSYNI'];
        $SYNII_SS = $tokenAnswers['SCOREYSRSYNII'];
        $SYNIII_SS = $tokenAnswers['SCOREYSRSYNIII'];
        $SYNIV_SS = $tokenAnswers['SCOREYSRSYNIV'];
        $SYNV_SS = $tokenAnswers['SCOREYSRSYNV'];
        $SYNVI_SS = $tokenAnswers['SCOREYSRSYNVI'];
        $SYNVII_SS = $tokenAnswers['SCOREYSRSYNVII'];
        $SYNVIII_SS = $tokenAnswers['SCOREYSRSYNVIII'];
        $INT_SS = $tokenAnswers['SCOREYSRINT'];
        $EXT_SS = $tokenAnswers['SCOREYSREXT'];
        $TOT_SS = $tokenAnswers['SCOREYSRTOT'];
        
        // SQL statements:
        $sql = "SELECT Tscore FROM stam__YSR WHERE Gender = '" . $Gender . "' AND ";

        $sql_DSM1 = $sql . " DSM1 = " . $DSM1_SS;
        $sql_DSM2 = $sql . " DSM2 = " . $DSM2_SS;
        $sql_DSM3 = $sql . " DSM3 = " . $DSM3_SS;
        $sql_DSM4 = $sql . " DSM4 = " . $DSM4_SS;
        $sql_DSM5 = $sql . " DSM5 = " . $DSM5_SS;
        $sql_DSM6 = $sql . " DSM6 = " . $DSM6_SS;

        $sql_SYNI   = $sql . " SYNI = " . $SYNI_SS;
        $sql_SYNII  = $sql . " SYNII = " . $SYNII_SS;
        $sql_SYNIII = $sql . " SYNIII = " . $SYNIII_SS;
        $sql_SYNIV  = $sql . " SYNIV = " . $SYNIV_SS;
        $sql_SYNV   = $sql . " SYNV = " . $SYNV_SS;
        $sql_SYNVI  = $sql . " SYNVI = " . $SYNVI_SS;
        $sql_SYNVII = $sql . " SYNVII = " . $SYNVII_SS;
        $sql_SYNVIII = $sql . " SYNVIII = " . $SYNVIII_SS;

        $sql_INT = $sql . " Min_INT <= " . $INT_SS . " AND Max_INT >= " . $INT_SS;
        $sql_EXT = $sql . " Min_EXT <= " . $EXT_SS . " AND Max_EXT >= " . $EXT_SS;
        $sql_TOT = $sql . " Min_TOT <= " . $TOT_SS . " AND Max_TOT >= " . $TOT_SS;
        
        //T-scores lookup
        $DSM1_TS = $this->db->fetchOne($sql_DSM1);
        $DSM2_TS = $this->db->fetchOne($sql_DSM2);
        $DSM3_TS = $this->db->fetchOne($sql_DSM3);
        $DSM4_TS = $this->db->fetchOne($sql_DSM4);
        $DSM5_TS = $this->db->fetchOne($sql_DSM5);
        $DSM6_TS = $this->db->fetchOne($sql_DSM6);

        $SYNI_TS    = $this->db->fetchOne($sql_SYNI);
        $SYNII_TS   = $this->db->fetchOne($sql_SYNII);
        $SYNIII_TS  = $this->db->fetchOne($sql_SYNIII);
        $SYNIV_TS   = $this->db->fetchOne($sql_SYNIV);
        $SYNV_TS    = $this->db->fetchOne($sql_SYNV);
        $SYNVI_TS   = $this->db->fetchOne($sql_SYNVI);
        $SYNVII_TS  = $this->db->fetchOne($sql_SYNVII);
        $SYNVIII_TS = $this->db->fetchOne($sql_SYNVIII);

        $INT_TS = $this->db->fetchOne($sql_INT);
        $EXT_TS = $this->db->fetchOne($sql_EXT);
        $TOT_TS = $this->db->fetchOne($sql_TOT);
        
        // Gebied:
        /// Cut-off scores:
        $MinTscoreCutoff = 65;  
        $MaxTscoreCutoff = 69;

        $MinIXTCutoff = 60;  
        $MaxIXTCutoff = 63; 

        $DSM1_Gb = $this->getDiagnoseText($DSM1_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $DSM2_Gb = $this->getDiagnoseText($DSM2_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $DSM3_Gb = $this->getDiagnoseText($DSM3_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $DSM4_Gb = $this->getDiagnoseText($DSM4_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $DSM5_Gb = $this->getDiagnoseText($DSM5_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $DSM6_Gb = $this->getDiagnoseText($DSM6_TS, $MaxTscoreCutoff, $MinTscoreCutoff);

        $SYNI_Gb = $this->getDiagnoseText($SYNI_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNII_Gb = $this->getDiagnoseText($SYNII_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNIII_Gb = $this->getDiagnoseText($SYNIII_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNIV_Gb = $this->getDiagnoseText($SYNIV_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNV_Gb = $this->getDiagnoseText($SYNV_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNVI_Gb = $this->getDiagnoseText($SYNVI_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNVII_Gb = $this->getDiagnoseText($SYNVII_TS, $MaxTscoreCutoff, $MinTscoreCutoff);
        $SYNVIII_Gb = $this->getDiagnoseText($SYNVIII_TS, $MaxTscoreCutoff, $MinTscoreCutoff);

        $INT_Gb = $this->getDiagnoseText($INT_TS, $MaxIXTCutoff, $MinIXTCutoff);
        $EXT_Gb = $this->getDiagnoseText($EXT_TS, $MaxIXTCutoff, $MinIXTCutoff);
        $TOT_Gb = $this->getDiagnoseText($TOT_TS, $MaxIXTCutoff, $MinIXTCutoff);
        
        // Resultaten naar LimeSurvey
        $results ['scriptVersie'] = $scriptVersie;
        $results ['stamtabelVersie'] = $stamtabelVersie;
        
        $results ['SCOREYSRTDSM1'] = $DSM1_TS;
        $results ['SCOREYSRDSM1Gb'] = $DSM1_Gb;
        $results ['SCOREYSRTDSM2'] = $DSM2_TS;
        $results ['SCOREYSRDSM2Gb'] = $DSM2_Gb;
        $results ['SCOREYSRTDSM3'] = $DSM3_TS;
        $results ['SCOREYSRDSM3Gb'] = $DSM3_Gb;
        $results ['SCOREYSRTDSM4'] = $DSM4_TS;
        $results ['SCOREYSRDSM4Gb'] = $DSM4_Gb;
        $results ['SCOREYSRTDSM5'] = $DSM5_TS;
        $results ['SCOREYSRDSM5Gb'] = $DSM5_Gb;
        $results ['SCOREYSRTDSM6'] = $DSM6_TS;
        $results ['SCOREYSRDSM6Gb'] = $DSM6_Gb;

        $results ['SCOREYSRTSYNI']    = $SYNI_TS;
        $results ['SCOREYSRSYNIGb']   = $SYNI_Gb;
        $results ['SCOREYSRTSYNII']   = $SYNII_TS;
        $results ['SCOREYSRSYNIIGb']   = $SYNII_Gb;
        $results ['SCOREYSRTSYNIII']  = $SYNIII_TS;
        $results ['SCOREYSRSYNIIIGb']   = $SYNIII_Gb;
        $results ['SCOREYSRTSYNIV']   = $SYNIV_TS;
        $results ['SCOREYSRSYNIVGb']   = $SYNIV_Gb;
        $results ['SCOREYSRTSYNV']    = $SYNV_TS;
        $results ['SCOREYSRSYNVGb']   = $SYNV_Gb;
        $results ['SCOREYSRTSYNVI']   = $SYNVI_TS;
        $results ['SCOREYSRSYNVIGb']   = $SYNVI_Gb;
        $results ['SCOREYSRTSYNVII']  = $SYNVII_TS;
        $results ['SCOREYSRSYNVIIGb']   = $SYNVII_Gb;
        $results ['SCOREYSRTSYNVIII'] = $SYNVIII_TS;
        $results ['SCOREYSRSYNVIIIGb']   = $SYNVIII_Gb;

        $results ['SCOREYSRTINT'] = $INT_TS;
        $results ['SCOREYSRINTGb'] = $INT_Gb;
        $results ['SCOREYSRTEXT'] = $EXT_TS;
        $results ['SCOREYSREXTGb'] = $EXT_Gb;
        $results ['SCOREYSRTTOT'] = $TOT_TS;
        $results ['SCOREYSRTOTGb'] = $TOT_Gb;
    
        $results ['SCOREYSROpm'] = $AgeComment;
        
        return $this->returnChanged($results, $tokenAnswers);        
    }
}