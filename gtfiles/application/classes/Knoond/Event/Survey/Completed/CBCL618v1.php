<?php

/**
 * Versie 1 - juni 2018
 *
 * Script voor de CBCL/6-18
 * Dit script haalt T-scores op uit de CBCL-stamtabel voor de 6 DSM-Schalen, 8 Syndroomschalen, 
 * Schaal Internaliseren, Schaal Externaliseren en de Totaalscore.
 * Vervolgens wordt bepaald in welk gebied de score zich bevind; Normaal, Borderline of Klinisch
 */

class Knoond_Event_Survey_Completed_CBCL618v1 extends \EMC_Event_SurveyCompletedEventAbstract {

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
        return "CBCL 6-18 berekening";
    }

    /*
     * Determines in what range the T-score lies
     * @param $Score: T-score, $Max: upper borderline T-score, $Min: lower borderline T-score
     * @return string range
     */
    private function getDiagnoseText($Score, $Max, $Min ){
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

	// Versie:
	$scriptVersie = 1;
	$stamtabelVersie = 0;

        //Patient gegevens
        $Age    = $token->getRespondent()->getAge($token->getCompletionTime());
        $Gender = $token->getRespondent()->getGender();
        $AgeComment = "";
        
        if ($Age < 6) {
            $Age = 6;
            $AgeComment = "Patient is jonger dan 6 jaar: normering voor 6-11 jarigen toegepast.";
        } elseif ($Age > 18) {
            $Age = 18;
            $AgeComment = "Patient is ouder dan 18 jaar: normering voor 12-18 jarigen toegepast.";
        }
        
        // Schaalscores:
        $DSM1_SS = $tokenAnswers['SCORECBCLDSM1'];
        $DSM2_SS = $tokenAnswers['SCORECBCLDSM2'];
        $DSM3_SS = $tokenAnswers['SCORECBCLDSM3'];
        $DSM4_SS = $tokenAnswers['SCORECBCLDSM4'];
        $DSM5_SS = $tokenAnswers['SCORECBCLDSM5'];
        $DSM6_SS = $tokenAnswers['SCORECBCLDSM6'];
        $SYNI_SS = $tokenAnswers['SCORECBCLSYNI'];
        $SYNII_SS = $tokenAnswers['SCORECBCLSYNII'];
        $SYNIII_SS = $tokenAnswers['SCORECBCLSYNIII'];
        $SYNIV_SS = $tokenAnswers['SCORECBCLSYNIV'];
        $SYNV_SS = $tokenAnswers['SCORECBCLSYNV'];
        $SYNVI_SS = $tokenAnswers['SCORECBCLSYNVI'];
        $SYNVII_SS = $tokenAnswers['SCORECBCLSYNVII'];
        $SYNVIII_SS = $tokenAnswers['SCORECBCLSYNVIII'];
        $INT_SS = $tokenAnswers['SCORECBCLINT'];
        $EXT_SS = $tokenAnswers['SCORECBCLEXT'];
        $TOT_SS = $tokenAnswers['SCORECBCLTOT'];

        // T-Scores:
        $sql = "SELECT Tscore FROM stam__CBCL WHERE Gender = '" . $Gender . "' AND Min_Age <= " . $Age . " AND Max_Age >= " . $Age . " AND ";

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

	// Exporteer naar LimeSurvey:
	$results ['scriptVersie'] = $scriptVersie;
	$results ['stamtabelVersie'] = $stamtabelVersie;

        $results ['SCORECBCLTDSM1'] = $DSM1_TS;
        $results ['SCORECBCLDSM1Gb'] = $DSM1_Gb;
        $results ['SCORECBCLTDSM2'] = $DSM2_TS;
        $results ['SCORECBCLDSM2Gb'] = $DSM2_Gb;
        $results ['SCORECBCLTDSM3'] = $DSM3_TS;
        $results ['SCORECBCLDSM3Gb'] = $DSM3_Gb;
        $results ['SCORECBCLTDSM4'] = $DSM4_TS;
        $results ['SCORECBCLDSM4Gb'] = $DSM4_Gb;
        $results ['SCORECBCLTDSM5'] = $DSM5_TS;
        $results ['SCORECBCLDSM5Gb'] = $DSM5_Gb;
        $results ['SCORECBCLTDSM6'] = $DSM6_TS;
        $results ['SCORECBCLDSM6Gb'] = $DSM6_Gb;

        $results ['SCORECBCLTSYNI']    = $SYNI_TS;
        $results ['SCORECBCLSYNIGb']   = $SYNI_Gb;
        $results ['SCORECBCLTSYNII']   = $SYNII_TS;
        $results ['SCORECBCLSYNIIGb']   = $SYNII_Gb;
        $results ['SCORECBCLTSYNIII']  = $SYNIII_TS;
        $results ['SCORECBCLSYNIIIGb']   = $SYNIII_Gb;
        $results ['SCORECBCLTSYNIV']   = $SYNIV_TS;
        $results ['SCORECBCLSYNIVGb']   = $SYNIV_Gb;
        $results ['SCORECBCLTSYNV']    = $SYNV_TS;
        $results ['SCORECBCLSYNVGb']   = $SYNV_Gb;
        $results ['SCORECBCLTSYNVI']   = $SYNVI_TS;
        $results ['SCORECBCLSYNVIGb']   = $SYNVI_Gb;
        $results ['SCORECBCLTSYNVII']  = $SYNVII_TS;
        $results ['SCORECBCLSYNVIIGb']   = $SYNVII_Gb;
        $results ['SCORECBCLTSYNVIII'] = $SYNVIII_TS;
        $results ['SCORECBCLSYNVIIIGb']   = $SYNVIII_Gb;

        $results ['SCORECBCLTINT'] = $INT_TS;
        $results ['SCORECBCLINTGb'] = $INT_Gb;
        $results ['SCORECBCLTEXT'] = $EXT_TS;
        $results ['SCORECBCLEXTGb'] = $EXT_Gb;
        $results ['SCORECBCLTTOT'] = $TOT_TS;
        $results ['SCORECBCLTOTGb'] = $TOT_Gb;
    
        $results ['SCORECBCLOpm'] = $AgeComment;
        
        return $this->returnChanged($results, $tokenAnswers);
    }

}
