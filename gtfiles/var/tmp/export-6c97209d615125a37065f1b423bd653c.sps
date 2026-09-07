SET UNICODE=ON.
SHOW LOCALE.
PRESERVE LOCALE.
SET LOCALE='en_UK'.

GET DATA
 /TYPE=TXT
 /FILE="RoncDoc_TumorBasis.dat"
 /DELCASE=LINE
 /DELIMITERS=","
 /QUALIFIER="'"
 /ARRANGEMENT=DELIMITED
 /FIRSTCASE=1
 /IMPORTCASE=ALL
 /VARIABLES=
 respondentid F5.4
 organizationid F5.4
 consentcode A64
 resptrackid F5.4
 gto_round_order F5.4
 gto_round_description A100
 gtr_track_name A40
 gr2t_track_info A250
 gto_completion_time DATETIME23
 gto_start_time DATETIME23
 gto_valid_from DATETIME23
 gto_valid_until DATETIME23
 startlanguage A64
 lastpage A64
 gto_id_token A9
 TumorNr F5.4
 TumornrEMC F5.4
 TumorNrCor F5.4
 TumorGroepNr A64
 Incdat SDATE10
 Contactmoment SDATE10
 DATUMEERSTEPA SDATE10
 IncdatCor SDATE10
 OpminciDat A64
 AardTumorEMC A64
 AardTumorCor F5.4
 TumBehorBijEMC A64
 TumBehorBijCor F5.4
 ZijdeEMC A64
 ZijdeCor A64
 SynchrMetachrEMC A64
 SynchrCor A64
 MorfIKNL F5.4
 MorfEMC A64
 MorfAndersEMC A64
 MorfCor F5.4
 TopogIKNL A64
 TopogEMC A64
 TopogHoofdGroepEMC A64
 TopogCor A64
 CTIKNL A64
 CNIKNL A64
 CMIKNL A64
 CTEMC A64
 CNEMC A64
 CMEMC A64
 CTCor A64
 CNCor A64
 CMCor A64
 PTIKNL A64
 PNIKNL A64
 PMIKNL A64
 PTCor A64
 PNCor A64
 PMCor A64
 PADatumEMC SDATE10
 PANummerDiagEMC A64
 CurPalEMC F5.4
 InvGroeiEMC F5.4
 RetrofarynEMC F5.4
 ExtranodGroeiEMC F5.4
 HPVStatusEMC F5.4
 PA5 A64
 PA6 F5.4
 PA7 F5.4
 PA8 F5.4
 PA9 F5.4
 PA10 F5.4
 PA11 F5.4
 PA12 F5.4
 PA13 F5.4
 PA14 F5.4
 PA15 F5.4
 OPMERKING A64
 OpmerkInvuller A64
 FoutiefInvoerTumor A64
 FoutiefInvoerTumorother A64
 ExtraVraag1 A64
 ExtraVraag1other A64
 Redengnther1 A64
 Redengnther1other A64
 Redennonprot1 A64
 Redennonprot1other A64
 Ther1CodeIKNL A64
 OmschrTher1IKNL A64
 CPTher1OmschrCor A64
 CPTher1OmschrCorother A64
 RTspec1 A64
 RTspec1other A64
 ChemoSpec1 A64
 ChemoSpec1other A64
 Ther1StartDatIKNL SDATE10
 Ther1StartDatCor SDATE10
 Ther2CodeIKNL A64
 OmschrTher2IKNL A64
 CPTher2OmschrCor A64
 CPTher2OmschrCorother A64
 RTspec2 A64
 RTspec2other A64
 ChemoSpec2 A64
 ChemoSpec2other A64
 Ther2StartDatIKNL SDATE10
 Ther2Cor SDATE10
 Ther3CodeIKNL A64
 OmschrTher3IKNL A64
 CPTher3OmschrCor A64
 CPTher3OmschrCorother A64
 RTspec3 A64
 RTspec3other A64
 ChemoSpec3 A64
 ChemoSpec3other A64
 Ther3StartDatIKNL SDATE10
 Ther3StartDatCor SDATE10
 Ther4CodeIKNL A64
 CPTherOmschr4Cor A64
 CPTherOmschr4Corother A64
 RTspec4 A64
 RTspec4other A64
 ChemoSpec4 A64
 ChemoSpec4other A64
 Ther4StartDatCor SDATE10
 Ther5CodeIKNL A64
 CPTher5OmschrCor A64
 CPTher5OmschrCorother A64
 RTspec5 A64
 RTspec5other A64
 ChemoSpec5 A64
 ChemoSpec5other A64
 Ther5StartDatCor SDATE10
 EindDatTher SDATE10
 TherAf F5.4
 PADatumTher SDATE10
 PANummerTher A64
 OpmTherAf A64
 OpmTher A64
 FoutiefInvoerTher A64
 FoutiefInvoerTherother A64
 Roken F5.4
 RookPY F5.4
 RookEenheden F5.4
 RookDuur F5.4
 RookStopJaar F5.4
 Alcohol A64
 AlcoholEenheden F5.4
 DrinkDuur F5.4
 DrinkStopJaar F5.4
 OpmRookDrink A64
 ACE27Comor F5.4
 ACE27 A64
 ACE27_1 A64
 ACE27_2 A64
 ACE27_3 A64
 ACE27_4 A64
 ACE27_5 A64
 ACE27_6 A64
 ACE27_7 A64
 ACE27_8 A64
 ACE27_9 A64
 ACE27_10 A64
 ACE27_11 A64
 ACE27_12 A64
 ACE27_13 A64
 Lengte F5.4
 Gewicht F5.4
 GewichtVerlies F5.4
 PriorMalig F5.4
 PriorMaligTopog A64
 PriorMaligTopogother A64
 PriorMaligJaar F5.4
 PriorMaligTreatment F5.4
 PriorMaligTreatmType F5.4
 WHOstatus F5.4
 AnemieyesNo F5.4
 AnemieValue F5.4
 Hartklep F5.4
 AlleenstaandYesNo F5.4
 OpmerkingACE27 A64
 FoutiefInvoerComorb A64
 FoutiefInvoerComorbother A64.
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
VARIABLE LABELS TumorNr 'IKNLTumornummer:'.
VARIABLE LABELS TumornrEMC 'EMCTumornummer:'.
VARIABLE LABELS TumorNrCor 'Hoeveelste tumor is dit chronologisch (cor):'.
VARIABLE LABELS TumorGroepNr 'Nummer dat uniek is voor tumorgroep:'.
VARIABLE LABELS Incdat 'IKNL Incidentiedatum (=PA datum):'.
VARIABLE LABELS Contactmoment 'EMC eerste tumor contactmoment:'.
VARIABLE LABELS DATUMEERSTEPA 'EMC 1e PA datum:'.
VARIABLE LABELS IncdatCor 'Incidentie datum (PA) cor:'.
VARIABLE LABELS OpminciDat 'Opmerking diagnose datum:  	 '.
VARIABLE LABELS AardTumorEMC 'EMC aard:'.
VARIABLE LABELS AardTumorCor 'Aard tumor cor:'.
VARIABLE LABELS TumBehorBijEMC 'EMC Tumor behorend bij:'.
VARIABLE LABELS TumBehorBijCor 'Tumor behorend bij cor: '.
VARIABLE LABELS ZijdeEMC 'EMC zijde:'.
VARIABLE LABELS ZijdeCor 'Zijde cor:'.
VARIABLE LABELS SynchrMetachrEMC 'EMC synchroon metachroon:'.
VARIABLE LABELS SynchrCor 'synchroon cor:'.
VARIABLE LABELS MorfIKNL 'IKNL morfologie:'.
VARIABLE LABELS MorfEMC 'EMC morfologie:'.
VARIABLE LABELS MorfAndersEMC 'EMC morfologie anders:'.
VARIABLE LABELS MorfCor 'Morfologie cor:'.
VARIABLE LABELS TopogIKNL 'IKNL Localisatie:'.
VARIABLE LABELS TopogEMC 'EMC Localisatie:'.
VARIABLE LABELS TopogHoofdGroepEMC 'EMC Localisatie hoofdgroep:'.
VARIABLE LABELS TopogCor 'Localisatie cor:'.
VARIABLE LABELS CTIKNL 'IKNL cT:'.
VARIABLE LABELS CNIKNL 'IKNL cN:'.
VARIABLE LABELS CMIKNL 'IKNL cM:'.
VARIABLE LABELS CTEMC 'EMC cT:'.
VARIABLE LABELS CNEMC 'EMC cN:'.
VARIABLE LABELS CMEMC 'EMC cM:'.
VARIABLE LABELS CTCor 'cT cor : '.
VARIABLE LABELS CNCor 'cN cor: '.
VARIABLE LABELS CMCor 'cM cor: '.
VARIABLE LABELS PTIKNL 'IKNL pT: '.
VARIABLE LABELS PNIKNL 'IKNL pN: '.
VARIABLE LABELS PMIKNL 'IKNL pM: '.
VARIABLE LABELS PTCor 'pT cor: '.
VARIABLE LABELS PNCor 'pN cor: '.
VARIABLE LABELS PMCor 'pM cor: '.
VARIABLE LABELS PADatumEMC 'PA datum (diagnostiek PA) EMC:'.
VARIABLE LABELS PANummerDiagEMC 'PA nummer (diagnostiek PA):'.
VARIABLE LABELS CurPalEMC 'Curatieve of palliatieve behandeling?'.
VARIABLE LABELS InvGroeiEMC 'Invasieve groei (tumor1)?'.
VARIABLE LABELS RetrofarynEMC 'Retro faryngeale klieren aanwezig?'.
VARIABLE LABELS ExtranodGroeiEMC 'Is er sprake van extranodale groei?'.
VARIABLE LABELS HPVStatusEMC 'HPV status:'.
VARIABLE LABELS PA5 'Sites of sinonasal recurrence:'.
VARIABLE LABELS PA6 'PA ..... (tumor1)?'.
VARIABLE LABELS PA7 'PA ..... (tumor1)?'.
VARIABLE LABELS PA8 'PA ..... (tumor1)?'.
VARIABLE LABELS PA9 'PA ..... (tumor1)?'.
VARIABLE LABELS PA10 'PA ..... (tumor1)?'.
VARIABLE LABELS PA11 'PA ..... (tumor1)?'.
VARIABLE LABELS PA12 'PA ..... (tumor1)?'.
VARIABLE LABELS PA13 'PA ..... (tumor1)?'.
VARIABLE LABELS PA14 'PA ..... (tumor1)?'.
VARIABLE LABELS PA15 'PA ..... (tumor1)?'.
VARIABLE LABELS OPMERKING 'EMC Opmerkingen'.
VARIABLE LABELS OpmerkInvuller 'Opmerkingen  invuller:'.
VARIABLE LABELS FoutiefInvoerTumor 'Foutieve invoer'.
VARIABLE LABELS FoutiefInvoerTumorother 'Overige'.
VARIABLE LABELS ExtraVraag1 ''.
VARIABLE LABELS ExtraVraag1other 'Overige'.
VARIABLE LABELS Redengnther1 'Heeft de pt behandeling gehad?'.
VARIABLE LABELS Redengnther1other 'Overige'.
VARIABLE LABELS Redennonprot1 'Was de behandeling protocollair?'.
VARIABLE LABELS Redennonprot1other 'Overige'.
VARIABLE LABELS Ther1CodeIKNL 'IKNL 1e ther.code:'.
VARIABLE LABELS OmschrTher1IKNL 'IKNL 1e ther omsch:'.
VARIABLE LABELS CPTher1OmschrCor '1e therapie cor'.
VARIABLE LABELS CPTher1OmschrCorother 'Overige'.
VARIABLE LABELS RTspec1 'Specificeer radiotherapie, eerste therapie:'.
VARIABLE LABELS RTspec1other 'Overige'.
VARIABLE LABELS ChemoSpec1 'Specificeer chemo, eerste therapie:'.
VARIABLE LABELS ChemoSpec1other 'Overige'.
VARIABLE LABELS Ther1StartDatIKNL 'IKNL 1e therapie startdatum:'.
VARIABLE LABELS Ther1StartDatCor '1e ther. start datum cor:'.
VARIABLE LABELS Ther2CodeIKNL 'IKNL 2e ther.code:'.
VARIABLE LABELS OmschrTher2IKNL 'IKNL 2e ther omsch:'.
VARIABLE LABELS CPTher2OmschrCor '2e therapie cor:'.
VARIABLE LABELS CPTher2OmschrCorother 'Overige'.
VARIABLE LABELS RTspec2 'Specificeer radiotherapie, tweede therapie:'.
VARIABLE LABELS RTspec2other 'Overige'.
VARIABLE LABELS ChemoSpec2 'Specificeer chemo, tweede therapie:'.
VARIABLE LABELS ChemoSpec2other 'Overige'.
VARIABLE LABELS Ther2StartDatIKNL 'IKNL 2e therapie startdatum:  '.
VARIABLE LABELS Ther2Cor '2e ther. start datum cor:'.
VARIABLE LABELS Ther3CodeIKNL 'IKNL 3e ther.code:'.
VARIABLE LABELS OmschrTher3IKNL 'IKNL 3e ther omsch:'.
VARIABLE LABELS CPTher3OmschrCor '3e therapie cor:'.
VARIABLE LABELS CPTher3OmschrCorother 'Overige'.
VARIABLE LABELS RTspec3 'Specificeer radiotherapie, derde therapie:'.
VARIABLE LABELS RTspec3other 'Overige'.
VARIABLE LABELS ChemoSpec3 'Specificeer chemo, derde therapie:'.
VARIABLE LABELS ChemoSpec3other 'Overige'.
VARIABLE LABELS Ther3StartDatIKNL 'IKNL 3e therapie startdatum:'.
VARIABLE LABELS Ther3StartDatCor '3e ther startdatum cor:'.
VARIABLE LABELS Ther4CodeIKNL 'IKNL 4e ther.code:'.
VARIABLE LABELS CPTherOmschr4Cor '4e therapie cor:'.
VARIABLE LABELS CPTherOmschr4Corother 'Overige'.
VARIABLE LABELS RTspec4 'Specificeer radiotherapie, vierde therapie:'.
VARIABLE LABELS RTspec4other 'Overige'.
VARIABLE LABELS ChemoSpec4 'Specificeer chemo, vierde therapie:'.
VARIABLE LABELS ChemoSpec4other 'Overige'.
VARIABLE LABELS Ther4StartDatCor '4e ther startdatum cor:'.
VARIABLE LABELS Ther5CodeIKNL 'IKNL 5e ther.code:'.
VARIABLE LABELS CPTher5OmschrCor '5e therapie cor:'.
VARIABLE LABELS CPTher5OmschrCorother 'Overige'.
VARIABLE LABELS RTspec5 'Specificeer radiotherapie, vijfde therapie:'.
VARIABLE LABELS RTspec5other 'Overige'.
VARIABLE LABELS ChemoSpec5 'Specificeer chemo, vijfde therapie:'.
VARIABLE LABELS ChemoSpec5other 'Overige'.
VARIABLE LABELS Ther5StartDatCor '5e ther startdatum cor:'.
VARIABLE LABELS EindDatTher 'Datum laatste therapie:'.
VARIABLE LABELS TherAf 'Is de therapie afgemaakt?'.
VARIABLE LABELS PADatumTher 'PA Datum (therapie PA):'.
VARIABLE LABELS PANummerTher 'PA nummer (Therapie PA):'.
VARIABLE LABELS OpmTherAf 'Opmerkingen over afgemaakte therapie:'.
VARIABLE LABELS OpmTher 'Opmerkingen over therapie:'.
VARIABLE LABELS FoutiefInvoerTher 'Foutieve invoer:'.
VARIABLE LABELS FoutiefInvoerTherother 'Overige'.
VARIABLE LABELS Roken 'Rookt de patient?'.
VARIABLE LABELS RookPY 'Hoeveel Packyears?  '.
VARIABLE LABELS RookEenheden 'Hoeveel (eenheden) rook(te) de patient per dag (tumor1)?'.
VARIABLE LABELS RookDuur 'Hoeveel jaar rook(te) de patient?'.
VARIABLE LABELS RookStopJaar 'Welk jaar gestopt met roken?'.
VARIABLE LABELS Alcohol 'Drinkt de patiënt?'.
VARIABLE LABELS AlcoholEenheden 'Hoeveel E/week?'.
VARIABLE LABELS DrinkDuur 'Hoeveel jaren drinkt de pt?'.
VARIABLE LABELS DrinkStopJaar 'Welk jaar is pt gestopt met drinken?'.
VARIABLE LABELS OpmRookDrink 'Opmerkingen roken of drinken:'.
VARIABLE LABELS ACE27Comor 'Is er comorbiditeit?'.
VARIABLE LABELS ACE27 ''.
VARIABLE LABELS ACE27_1 'Cardiovascular'.
VARIABLE LABELS ACE27_2 'Respiratory'.
VARIABLE LABELS ACE27_3 'Gastrointestinal'.
VARIABLE LABELS ACE27_4 'Renal'.
VARIABLE LABELS ACE27_5 'Endocrine'.
VARIABLE LABELS ACE27_6 'Neurological'.
VARIABLE LABELS ACE27_7 'Psychiatric'.
VARIABLE LABELS ACE27_8 'Rheumatologic'.
VARIABLE LABELS ACE27_9 'Immunological'.
VARIABLE LABELS ACE27_10 'Malignancy'.
VARIABLE LABELS ACE27_11 'Substance Abuse'.
VARIABLE LABELS ACE27_12 'Body Weight'.
VARIABLE LABELS ACE27_13 'Overall Score'.
VARIABLE LABELS Lengte 'Lengte in cm:'.
VARIABLE LABELS Gewicht 'Gewicht in kg'.
VARIABLE LABELS GewichtVerlies 'Gewichtsverlies laatst 6 maanden (in kg):'.
VARIABLE LABELS PriorMalig 'Heeft pt een eerdere maligniteit gehad?'.
VARIABLE LABELS PriorMaligTopog 'Localisatie eerdere maligniteit:'.
VARIABLE LABELS PriorMaligTopogother 'Overige'.
VARIABLE LABELS PriorMaligJaar 'In welk jaar was deze maligniteit (meest recente)?'.
VARIABLE LABELS PriorMaligTreatment 'Is deze eerdere maligniteit behandeld?'.
VARIABLE LABELS PriorMaligTreatmType 'Wat was de behandeling van deze eerdere maligniteit?'.
VARIABLE LABELS WHOstatus 'WHO performance status:'.
VARIABLE LABELS AnemieyesNo 'Heeft pt anemie bij diagnose? (Hb man &lt;8.5; vrouw &lt;7.5)'.
VARIABLE LABELS AnemieValue 'Wat is de waarde van de Anemie?'.
VARIABLE LABELS Hartklep 'Heeft de pt een hartklepafwijking?'.
VARIABLE LABELS AlleenstaandYesNo 'Is pt alleenstaand?'.
VARIABLE LABELS OpmerkingACE27 'Opmerkingen:'.
VARIABLE LABELS FoutiefInvoerComorb 'Foutieve invoer'.
VARIABLE LABELS FoutiefInvoerComorbother 'Overige'.

*Define value labels.
VALUE LABELS organizationid
70 'KNO Onderzoek'.

VALUE LABELS AardTumorCor
1 '1e primaire'
2 '2e primaire'
3 '3e primaire'
4 '4e primaire'
5 '5e primaire'
6 '1e recidief'
7 '2e recidief'
8 '3e recidief'
9 '4e recidief'
10 '5e recidief'.

VALUE LABELS TumBehorBijCor
1 '1e primaire'
2 '2e primaire'
3 '3e primaire'
4 '4e primaire'
5 '5e primaire'.

VALUE LABELS ZijdeCor
"A1" 'links'
"A2" 'rechts'
"A3" 'beiderzijds'
"A4" 'midden'.

VALUE LABELS SynchrCor
"A1" 'nvt'
"A2" 'synchroon'
"A3" 'metachroon'.

VALUE LABELS CurPalEMC
1 'curatief'
2 'palliatief'
3 'onbekend'
4 'palliatief door andere tumor'
5 'palliatief door weigeren van curatieve behandeling door patiënt'.

VALUE LABELS InvGroeiEMC
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS RetrofarynEMC
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS ExtranodGroeiEMC
0 'Nee'
1 'Ja, klinisch (bijv. huidingroei)'
2 'Ja, pathologisch'
3 'ja, zowel pathologisch als klinisch'.

VALUE LABELS HPVStatusEMC
1 'P16-'
2 'P16+ HPV-'
3 'P16+ HPV+'
4 'onbekend'.

VALUE LABELS PA5
"C300" 'Vestibulum Nasi'
"C310" 'Sinus maxillaris '
"C311" 'Sinus ethmoidailis'
"C312" 'Sinus frontalis'
"C313" 'Sinus sphenoidalis'
"C319" 'Accessory sinus, NOS'
"C696" 'Orbita'
"C770" 'Lymfeklieren v/d nek'
"C773" 'Lymfeklieren v/d oksel '
"C341" 'Bovenste longkwab'
"C342" 'Middelste longkwab'
"C343" 'Onderste longkwab'
"C349" 'Long, NOS'
"C400" 'Botten bovenste extr'
"C403" 'Botten onderste extr'
"C410" 'Botten schedel en gezicht '
"C411" 'Mandibula'
"C412" 'Ruggengraat'.

VALUE LABELS PA6
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA7
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA8
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA9
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA10
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA11
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA12
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA13
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA14
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS PA15
1 'ja'
2 'nee'
3 'Missing'.

VALUE LABELS FoutiefInvoerTumor
"1" 'Toch geen Tumor'
"-oth-" 'Overige'.

VALUE LABELS ExtraVraag1
"0" 'Nee'
"-oth-" 'Overige'
"1" 'Ja'.

VALUE LABELS Redengnther1
"1" 'Ja'
"-oth-" 'Overige'
"3" 'Nee, keuze pt obv lich conditie'
"2" 'Nee, keuze werkgroep obv leeftijd/ comorb'
"4" 'Nee, keuze pt obv geestelijke conditie'
"5" 'Nee, keuze pt obv familie/ huisarts'.

VALUE LABELS Redennonprot1
"1" 'Ja'
"-oth-" 'Overige'
"3" 'Nee, keuze pt obv lich conditie'
"2" 'Nee, keuze werkgroep obv leeftijd/ comorb'
"4" 'Nee, keuze pt obv geestelijke conditie'
"5" 'Nee, keuze pt obv familie/ huisarts'.

VALUE LABELS CPTher1OmschrCor
"1" 'Geen therapie'
"-oth-" 'Overige'
"2" 'Chirurgie  (deel) vd tumor ZONDER lymfeklierdissectie '
"3" 'Chirurgie  (deel) vd tumor MET lymfeklierdissectie'
"4" 'Alleen lymfeklierdissectie'
"5" 'Radiotherapie (lokaal/ regionaal/ locoregionaal)'
"6" 'Chemotherapie'.

VALUE LABELS RTspec1
"1" '3D-CRT'
"-oth-" 'Overige'
"2" 'Brachyherapie'
"3" 'IMRT'
"4" 'CyberKnife'
"5" 'SBRT'.

VALUE LABELS ChemoSpec1
"1" 'Alkylating agents'
"-oth-" 'Overige'
"2" 'Antimetabolites'
"3" 'Anti-tumor antibiotics'
"4" 'Topoisomerase inhibitors'
"5" 'Mitotic inhibitors'.

VALUE LABELS CPTher2OmschrCor
"1" 'Geen therapie'
"-oth-" 'Overige'
"2" 'Chirurgie  (deel) vd tumor ZONDER lymfeklierdissectie '
"3" 'Chirurgie  (deel) vd tumor MET lymfeklierdissectie'
"4" 'Alleen lymfeklierdissectie'
"5" 'Radiotherapie (lokaal/ regionaal/ locoregionaal)'
"6" 'Chemotherapie'.

VALUE LABELS RTspec2
"1" '3D-CRT'
"-oth-" 'Overige'
"2" 'Brachyherapie'
"3" 'IMRT'
"4" 'CyberKnife'
"5" 'SBRT'.

VALUE LABELS ChemoSpec2
"1" 'Alkylating agents'
"-oth-" 'Overige'
"2" 'Antimetabolites'
"3" 'Anti-tumor antibiotics'
"4" 'Topoisomerase inhibitors'
"5" 'Mitotic inhibitors'.

VALUE LABELS CPTher3OmschrCor
"1" 'Geen therapie'
"-oth-" 'Overige'
"2" 'Chirurgie  (deel) vd tumor ZONDER lymfeklierdissectie '
"3" 'Chirurgie  (deel) vd tumor MET lymfeklierdissectie'
"4" 'Alleen lymfeklierdissectie'
"5" 'Radiotherapie (lokaal/ regionaal/ locoregionaal)'
"6" 'Chemotherapie'.

VALUE LABELS RTspec3
"1" '3D-CRT'
"-oth-" 'Overige'
"2" 'Brachyherapie'
"3" 'IMRT'
"4" 'CyberKnife'
"5" 'SBRT'.

VALUE LABELS ChemoSpec3
"1" 'Alkylating agents'
"-oth-" 'Overige'
"2" 'Antimetabolites'
"3" 'Anti-tumor antibiotics'
"4" 'Topoisomerase inhibitors'
"5" 'Mitotic inhibitors'.

VALUE LABELS CPTherOmschr4Cor
"1" 'Geen therapie'
"-oth-" 'Overige'
"2" 'Chirurgie  (deel) vd tumor ZONDER lymfeklierdissectie '
"3" 'Chirurgie  (deel) vd tumor MET lymfeklierdissectie'
"4" 'Alleen lymfeklierdissectie'
"5" 'Radiotherapie (lokaal/ regionaal/ locoregionaal)'
"6" 'Chemotherapie'.

VALUE LABELS RTspec4
"1" '3D-CRT'
"-oth-" 'Overige'
"2" 'Brachyherapie'
"3" 'IMRT'
"4" 'CyberKnife'
"5" 'SBRT'.

VALUE LABELS ChemoSpec4
"1" 'Alkylating agents'
"-oth-" 'Overige'
"2" 'Antimetabolites'
"3" 'Anti-tumor antibiotics'
"4" 'Topoisomerase inhibitors'
"5" 'Mitotic inhibitors'.

VALUE LABELS CPTher5OmschrCor
"1" 'Geen therapie'
"-oth-" 'Overige'
"2" 'Chirurgie  (deel) vd tumor ZONDER lymfeklierdissectie '
"3" 'Chirurgie  (deel) vd tumor MET lymfeklierdissectie'
"4" 'Alleen lymfeklierdissectie'
"5" 'Radiotherapie (lokaal/ regionaal/ locoregionaal)'
"6" 'Chemotherapie'.

VALUE LABELS RTspec5
"1" '3D-CRT'
"-oth-" 'Overige'
"2" 'Brachyherapie'
"3" 'IMRT'
"4" 'CyberKnife'
"5" 'SBRT'.

VALUE LABELS ChemoSpec5
"1" 'Alkylating agents'
"-oth-" 'Overige'
"2" 'Antimetabolites'
"3" 'Anti-tumor antibiotics'
"4" 'Topoisomerase inhibitors'
"5" 'Mitotic inhibitors'.

VALUE LABELS TherAf
1 'ja'
2 'nee'
3 'missing'.

VALUE LABELS FoutiefInvoerTher
"1" 'Toch geen Tumor en dus geen therapie'
"-oth-" 'Overige'.

VALUE LABELS Roken
1 'Ja'
2 'Nee'
3 'Ex Roker'
4 'Missing'.

VALUE LABELS Alcohol
"A1" 'Ja'
"A2" 'Nee'
"A3" 'Ex Drinker'
"A4" 'Missing'.

VALUE LABELS ACE27Comor
1 'ja'
2 'nee'
3 'missing'.

VALUE LABELS ACE27
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_1
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_2
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_3
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_4
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_5
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_6
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_7
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_8
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_9
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_10
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_11
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_12
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS ACE27_13
"A1" '0'
"A2" '1'
"A3" '2'
"A4" '3'.

VALUE LABELS PriorMalig
1 'Ja'
2 'Nee'
3 'Missing'.

VALUE LABELS PriorMaligTopog
"1" 'Longkanker'
"-oth-" 'Overige'
"2" 'Borstkanker'
"3" 'Darmkanker'
"4" 'Prostaatkanker'
"5" 'Heamatologische kanker'
"6" 'Hoofd Hals'.

VALUE LABELS PriorMaligTreatment
1 'Ja'
2 'Nee'.

VALUE LABELS PriorMaligTreatmType
1 'Geen'
2 'RT'
3 'Chemo+RT'
4 'Chir'
5 'Chir+RT'
6 'chemo+Rt+Ch'
7 'chemo'
8 'Chirurgie+chemo'.

VALUE LABELS WHOstatus
0 'Normale activiteit '
1 'Symptomatisch, maar ambulant; in staat lichte werkzaamheden uit te voeren'
2 'Meer dan 50% van de tijd overdag ambulant, kan voor zichzelf zorgen. Niet in staat te werken. '
3 'Meer dan 50% van de tijd overdag in bed of stoel; kan beperkt voor zichzelf zorgen. '
4 'Volledig ziek. Kan niet voor zichzelf zorgen. Volledig bedlegerig of zit gehele dag in stoel.'
5 'Missing'.

VALUE LABELS AnemieyesNo
1 'Ja'
2 'Nee'
3 'missing'.

VALUE LABELS Hartklep
1 'Ja'
2 'Nee'
3 'Missing'.

VALUE LABELS AlleenstaandYesNo
1 'Ja'
2 'Nee'
3 'Missing'.

VALUE LABELS FoutiefInvoerComorb
"1" 'Toch geen tumor en daarom comorbiditeit niet relevant'
"-oth-" 'Overige'.

RESTORE LOCALE.
