SET UNICODE=ON.
SHOW LOCALE.
PRESERVE LOCALE.
SET LOCALE='en_UK'.

GET DATA
 /TYPE=TXT
 /FILE="RoncDoc_PatientAlgemeen.dat"
 /DELCASE=LINE
 /DELIMITERS=","
 /QUALIFIER="'"
 /ARRANGEMENT=DELIMITED
 /FIRSTCASE=1
 /IMPORTCASE=ALL
 /VARIABLES=
 respondentid F5.4
 organizationid F5.4
 consentcode A10
 resptrackid F5.4
 gto_round_order F5.4
 gto_round_description A100
 gtr_track_name A40
 gr2t_track_info A250
 gto_completion_time DATETIME23
 gto_start_time DATETIME23
 gto_valid_from DATETIME23
 gto_valid_until DATETIME23
 startlanguage A2
 lastpage A64
 gto_id_token A9
 patnr2 A7
 patnr3 A7
 patnr4 A7
 keyNKR F5.4
 opmpidnr A64
 Gesl F5.4
 GESLACHT A1
 Geslcor F5.4
 Gebdat SDATE10
 GEBOORTEDATUM SDATE10
 Gebdatcor SDATE10
 Vitstat F5.4
 OVERLEDEN A1
 Vitstatcor F5.4
 Vitdat SDATE10
 OVERLIJDENSDATUM SDATE10
 Vitdatcor SDATE10
 overlreden F5.4
 studienr A64
 Opmalg A382
 Datacontrole A5
 Datacontroleother A15.
CACHE.
EXECUTE.

*Define variable labels.
VARIABLE LABELS respondentid 'Respondent ID'.
VARIABLE LABELS organizationid 'Organisatie'.
VARIABLE LABELS consentcode 'Toestemming'.
VARIABLE LABELS resptrackid 'Patiënt traject ID'.
VARIABLE LABELS gto_round_order 'Ronde volgorde'.
VARIABLE LABELS gto_round_description 'Ronde omschrijving'.
VARIABLE LABELS gtr_track_name 'Traject naam'.
VARIABLE LABELS gr2t_track_info 'Trajectomschrijving'.
VARIABLE LABELS gto_completion_time 'Datum ingevuld op'.
VARIABLE LABELS gto_start_time 'Startdatum'.
VARIABLE LABELS gto_valid_from 'Geldig vanaf'.
VARIABLE LABELS gto_valid_until 'Geldig tot'.
VARIABLE LABELS startlanguage 'Aanvangstaal'.
VARIABLE LABELS lastpage 'Laatste pagina'.
VARIABLE LABELS gto_id_token 'Kenmerk'.
VARIABLE LABELS patnr2 'IKNL pidnr 2e tumor '.
VARIABLE LABELS patnr3 'IKNL pidnr 3e tumor '.
VARIABLE LABELS patnr4 'IKNL pidnr 4e tumor'.
VARIABLE LABELS keyNKR 'IKNLkeyNKR'.
VARIABLE LABELS opmpidnr 'Opmerkingen pidnr'.
VARIABLE LABELS Gesl 'IKNL geslacht'.
VARIABLE LABELS GESLACHT 'EMC geslacht:'.
VARIABLE LABELS Geslcor 'Geslacht correctie:'.
VARIABLE LABELS Gebdat 'IKNL gebdat:'.
VARIABLE LABELS GEBOORTEDATUM 'EMC gebdat:'.
VARIABLE LABELS Gebdatcor 'Gebdat cor:'.
VARIABLE LABELS Vitstat 'IKNLoverleden'.
VARIABLE LABELS OVERLEDEN 'EMC overleden'.
VARIABLE LABELS Vitstatcor 'Overleden cor:'.
VARIABLE LABELS Vitdat 'IKNL overlijdensdatum of laatste datum follow up:'.
VARIABLE LABELS OVERLIJDENSDATUM 'EMC overlijdensdatum:'.
VARIABLE LABELS Vitdatcor 'IKNL overlijdensdatum of laatste datum follow up cor:'.
VARIABLE LABELS overlreden 'Reden overlijden:'.
VARIABLE LABELS studienr 'Studienr'.
VARIABLE LABELS Opmalg 'opmerking:'.
VARIABLE LABELS Datacontrole 'Record is nagekeken door:'.
VARIABLE LABELS Datacontroleother 'Overige'.

*Define value labels.
VALUE LABELS organizationid
70 'KNO Onderzoek'.

VALUE LABELS overlreden
1 'door HH-tumor'
2 'niet door HH-tumor'
3 'onbekend'.

VALUE LABELS Datacontrole
"1" 'Denise van Beekveld'
"-oth-" 'Overige'
"2" 'Anri Maharadze'
"3" 'Roderick te Riele'
"4" 'Fleur Tuijl'
"5" 'Laurents Visser'
"6" 'Carolina Touw'
"7" 'Anita Brusse'
"8" 'Irene Nauta'
"9" 'Rens van Iwaarden'
"10" 'Diako Berzenji'
"11" 'Jang Zhang'.

RESTORE LOCALE.
