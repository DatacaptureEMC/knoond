<?php

/**
 * Versie 1 - december 2018
 *
 * Script voor de TRF (Teacher Report Form, 6 t/m 18 jaar)
 * Dit script haalt T-scores op uit de TRF-stamtabel voor de 6 DSM-Schalen,8 Syndroomschalen,
 * Schaal Internaliseren, Schaal Externaliseren en de Totaalscore.
 * Daarnaast worden percentielscores opgehaald voor 2 DSM-subschalen en 2 Syndroom-subschalen.
 * Vervolgens wordt bepaald in welk gebied de score zich bevind; Normaal, Borderline of Klinisch
 */
class Knoond_Event_Survey_Completed_TRFv1 extends \EMC_Event_SurveyCompletedEventAbstract {

/**
     * Holds one or more fields that we can lookup in a table
     *
     * Each lookup is represented as an array and must have the following format:
     *  table        => tablename
     *  resultFields => array of surveyfield => tablefield (could be more then one)
     *  filterFields => array of surveyfield => tablefield (could be more then one, will be ANDed together)
     */
    protected $resultLookups    = array();
    protected $resultLookups618 = array();

    /**
     * A pretty name for use in dropdown selection boxes.
     *
     * @return string Name
     */
    public function getEventName() {
        return "TRF score 1,5-5 en 6-18";
    }

    public function __construct() {
        parent::__construct();

        $this->resultLookups = array(
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM1' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM1' => 'DSM1'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM2' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM2' => 'DSM2'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM3' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM3' => 'DSM3'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM4' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM4' => 'DSM4'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM5' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM5' => 'DSM5'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNI' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNI' => 'SynI'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNII' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'         => 'Gender',
                    'age'            => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNII' => 'SynII'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNIII' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'          => 'Gender',
                    'age'             => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNIII' => 'SynIII'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNIV' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'         => 'Gender',
                    'age'            => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNIV' => 'SynIV'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNV' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNV' => 'SynV'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNVI' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'         => 'Gender',
                    'age'            => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNVI' => 'SynVI'
                )
            ),
             array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTINT' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'       => 'Gender',
                    'age'          => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFINT' => new \Zend_Db_Expr('Min_INT <= ? AND Max_INT >= ?'),
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTEXT' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'       => 'Gender',
                    'age'          => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFEXT' => new \Zend_Db_Expr('Min_EXT <= ? AND Max_EXT >= ?'),
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTTOT' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'       => 'Gender',
                    'age'          => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFTOT' => new \Zend_Db_Expr('Min_TOT <= ? AND Max_TOT >= ?'),
                )
            )
        );

        $this->resultLookups618 = array(
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTDSM6' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM6' => 'DSM6'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNVII' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'          => 'Gender',
                    'age'             => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNVII' => 'SynVII'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFTSYNVIII' => 'Tscore'
                ),
                'filterFields' => array(
                    'gender'           => 'Gender',
                    'age'              => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNVIII' => 'SynVIII'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFDSM4InPer' => 'Perc'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM4In' => 'DSM4In'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFDSM4HIPer' => 'Perc'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFDSM4HI' => 'DSM4HI'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFSYNVIInPer' => 'Perc'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNVIIn' => 'SYNVIIn'
                )
            ),
            array(
                'table'        => 'stamemc__trf_v1',
                'resultFields' => array(
                    'SCORETRFSYNVIHIPer' => 'Perc'
                ),
                'filterFields' => array(
                    'gender'        => 'Gender',
                    'age'           => new \Zend_Db_Expr('Min_Age <= ? AND Max_Age >= ?'),
                    'SCORETRFSYNVIHI' => 'SYNVIHI'
                )
            )
        );
    }

    /*
     * Determines in what range the T-score lies
     * @param $Score: T-score, $Max: upper borderline T-score, $Min: lower borderline T-score
     * @return string range
     */
    private function getDiagnoseText($Score, $Max, $Min) {
        if ($Score > $Max) {
            $s = 'Klinisch';
        }
        elseif ($Score < $Min) {
            $s = 'Normaal';
        }
        else {
            $s = 'Borderline';
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
        $tokenAnswers = $token->getRawAnswers();
        $results      = array();
        $respondent   = $token->getRespondent();
        $age          = $respondent->getAge($token->getCompletionTime());

        $results['scriptVersie']    = 1;
        $results['stamtabelVersie'] = 1;

        // Reset eventueel bij herberekening SCOREAGECOMMENT
        $ageComment = '';

        // Versie voor 6-18 heeft een extra score element, daar controleren we op
        if (array_key_exists('SCORETRFDSM6', $tokenAnswers)) {
            // Age 6-18
            if ($age > 18) {
                $age        = 18;
                $ageComment = 'Gescoord als 18-jarige';
            }
            if ($age < 6) {
                $age        = 6;
                $ageComment = 'Gescoord als 6-jarige';
            }
        }
        else {
            // Age 15-5
            if ($age > 5) {
                $age        = 5;
                $ageComment = 'Gescoord als 5-jarige';
            }
            if ($age < 1) {
                $age        = 1;
                $ageComment = 'Gescoord als 1-jarige';
            }
        }
        $results['SCORETRFopm'] = $ageComment;

        $answerData           = $tokenAnswers;
        $answerData['age']    = $age;
        $answerData['gender'] = $token->getRespondent()->getGender();

        /// Cut-off scores:
        $MinTscoreCutoff = 65;
        $MaxTscoreCutoff = 69;

        $MinIXTCutoff = 60;
        $MaxIXTCutoff = 63;
        
        $MinPerCutoff = 93;
        $MaxPerCutoff = 97;

        // Look up answers
        $resultsBasis = $this->getResultFields($answerData, $token, $this->resultLookups);

        if (!empty($resultsBasis)) {
            $results = $results + $resultsBasis;
            $results['SCORETRFDSM1Gb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTDSM1'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFDSM2Gb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTDSM2'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFDSM3Gb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTDSM3'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFDSM4Gb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTDSM4'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFDSM5Gb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTDSM5'], $MaxTscoreCutoff, $MinTscoreCutoff);

            $results['SCORETRFSYNIGb']    = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNI'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFSYNIIGb']   = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNII'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFSYNIIIGb']  = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNIII'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFSYNIVGb']   = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNIV'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFSYNVGb']    = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNV'], $MaxTscoreCutoff, $MinTscoreCutoff);
            $results['SCORETRFSYNVIGb']   = $this->getDiagnoseText($resultsBasis['SCORETRFTSYNVI'], $MaxTscoreCutoff, $MinTscoreCutoff);            

            $results['SCORETRFINTGb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTINT'], $MaxIXTCutoff, $MinIXTCutoff);
            $results['SCORETRFEXTGb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTEXT'], $MaxIXTCutoff, $MinIXTCutoff);
            $results['SCORETRFTOTGb'] = $this->getDiagnoseText($resultsBasis['SCORETRFTTOT'], $MaxIXTCutoff, $MinIXTCutoff);
        }

        // Look up answers for age 6 and older
        if ($age > 5) {
            $results618 = $this->getResultFields($answerData, $token, $this->resultLookups618);
            if (!empty($results618)) {
                $results = $results + $results618;
                $results['SCORETRFDSM6Gb'] = $this->getDiagnoseText($results618['SCORETRFTDSM6'], $MaxTscoreCutoff, $MinTscoreCutoff);
                $results['SCORETRFSYNVIIGb']  = $this->getDiagnoseText($results618['SCORETRFTSYNVII'], $MaxTscoreCutoff, $MinTscoreCutoff);
                $results['SCORETRFSYNVIIIGb'] = $this->getDiagnoseText($results618['SCORETRFTSYNVIII'], $MaxTscoreCutoff, $MinTscoreCutoff);
                $results['SCORETRFDSM4InGb'] = $this->getDiagnoseText(filter_var($results618['SCORETRFDSM4InPer'], FILTER_SANITIZE_NUMBER_INT), $MaxPerCutoff, $MinPerCutoff);
                $results['SCORETRFDSM4HIGb'] = $this->getDiagnoseText(filter_var($results618['SCORETRFDSM4HIPer'], FILTER_SANITIZE_NUMBER_INT), $MaxPerCutoff, $MinPerCutoff);
                $results['SCORETRFSYNVIInGb']  = $this->getDiagnoseText(filter_var($results618['SCORETRFSYNVIInPer'], FILTER_SANITIZE_NUMBER_INT), $MaxPerCutoff, $MinPerCutoff);
                $results['SCORETRFSYNVIHIGb'] = $this->getDiagnoseText(filter_var($results618['SCORETRFSYNVIHIPer'], FILTER_SANITIZE_NUMBER_INT), $MaxPerCutoff, $MinPerCutoff);
            }
        }

        return $this->returnChanged($results, $tokenAnswers);
    }

}