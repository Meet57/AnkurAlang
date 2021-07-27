<script>
  $( function() {
    var availableTags = [
      'BANDSAW,do_all,DOALL(USA),100201',
'BORING,tos,TOS(CZECH REPUBLIC),100302',
'BORING,fmua,FMUA (ROMANIA),100402',
'BORING,sip,SIP (SWITZERLAND),100502',
'CENTERLESS GRINDER,cincinnati,CINCINNATI MILACRON (USA),100603',
'CENTERLESS GRINDER,szim,SZIM (HUNGARY),100703',
'CNC TURNING,jyoti,JYOTI (RAJKOT),100904',
'CNC VTL,dg,DALIAN GUOFENG,101305',
'CYLINDRICAL GRINDER,mso,MSO (GERMANY),101406',
'CYLINDRICAL GRINDER,js_1300x,JONES & SHIPMAN (UK),101506',
'CNC TURNING,bb,BINNES & BERRY (UK),101004',
'CYLINDRICAL GRINDER,js_uk,JONES & SHIPMAN (UK),101706',
'CYLINDRICAL GRINDER,ty,TOYODA (JAPAN),101806',
'CYLINDRICAL GRINDER,cometa,COMETA (ITALY),101906',
'CYLINDRICAL GRINDER,cometa_od,COMETA (ITALY),102006',
'CNC TURNING,ms,MORI SEIKI (JAPAN),101104',
'CYLINDRICAL GRINDER,profila,PROFILA (GERMANY),102106',
'CYLINDRICAL GRINDER,js_1300,JONES & SHIPMAN (UK),102206',
'CNC TURNING,haas,HAAS (USA),101204',
'CYLINDRICAL GRINDER,karsten,KARSTENS (GERMANY),102306',
'CYLINDRICAL GRINDER,hostivar_od,TOS HOSTIVAR (CZECH REPUBLIC),102406',
'GEAR BASED MACHINERY,king,KLINGELNBERG (GERMANY),102507',
'GEAR BASED MACHINERY,hofler,HOFLER (GERMANY),102607',
'GEAR BASED MACHINERY,reisz,REISHAUER (SWITZERLAND),102707',
'GEAR BASED MACHINERY,reiszzz,REISHAUER (SWITZERLAND),102807',
'GEAR BASED MACHINERY,niles,WMW NILES (GERMANY),102907',
'MILLING MACHINES,alliant,ALLIANT (USA),103508',
'GEAR BASED MACHINERY,cugir,CUGIR (ROMANIA),103007',
'MILLING MACHINES,vectrax,VECTRAX (TAIWAN),103608',
'GEAR BASED MACHINERY,wmw,WMW (GERMANY),103107',
'GEAR BASED MACHINERY,sheyong,SHEYONG (TAIWAN),103207',
'GEAR BASED MACHINERY,toss,TOS (CZECH REPUBLIC),103307',
'GEAR BASED MACHINERY,fellows,FELLOWS,103407',
'MILLING MACHINES,ajax,AJAX (ENGLAND),103708',
'MILLING MACHINES,topone,TOP ONE (TAIWAN),103808',
'PLANO MILLER,beghini,BEGHINI (ITALY),106509',
'PLANO MILLER,sarabs,SARAB SUKH (PUNJAB),106609',
'MILLING MACHINES,rambo,RAMBO (TAIWAN),103908',
'RADIAL DRILL,breda,BREDA (ITALY),106910',
'RADIAL DRILL,taipin,TAIPIN (TAIWAN),107110',
'MILLING MACHINES,berico,BERICO (ITALY),104008',
'RADIAL DRILL,kao,KAO MING (TAIWAN),107210',
'RADIAL DRILL,sicmat,SICMAT (ITALY),107310',
'MILLING MACHINES,wmww,WMW (GERMAN),104208',
'MILLING MACHINES,kopings,KOPINGS (SWEDEN),104308',
'RADIAL DRILL,mas,MAS (CZECHOSLOVAKIA),107510',
'RADIAL DRILL,hmt,HMT (BANGLORE),107610',
'ROTARY SURFACE GRINDER,oerlikon,OERLIKON MATTISON (ITALY),107711',
'SHAPING,brit,BRITANIA (UK),107812',
'MILLING MACHINES,shw,SHW (GERMAN),104508',
'SHAPING,cinci,CINCINNATI (USA),107912',
'SHAPING,bombay,BOMBAY,108012',
'MILLING MACHINES,gate,GATE(UK),104608',
'SHAPING,zocca,ZOCCA (GERMANY),108112',
'SHAPING,verna,VARNAMO (SWEDEN),108212',
'SHAPING,dmks,DMK (RAJKOT),108312',
'SHAPING,dmkf,DMK (RAJKOT),108412',
'MILLING MACHINES,gambin,GAMBIN (FRANCE),104708',
'SLOTTING,wald,WALDRICH COBURG (GERMANY),108513',
'MILLING MACHINES,arno,ARNO (ITALY),104808',
'MILLING MACHINES,induma,INDUMA (ITALY),104908',
'SURFACE GRINDER,fav,FAVRETTO (ITALY),108614',
'MILLING MACHINES,kurim,TOS KURIM (CZECHOSLOVAKIA),105008',
'MILLING MACHINES,oslo,TOS OLOMOUC (CZECHOSLOVAKIA),105108',
'SURFACE GRINDER,chev,CHEVALIER (TAIWAN),108814',
'MILLING MACHINES,jarbe,JARBE (FRANCE),105208',
'SURFACE GRINDER,acera,ACER (TAIWAN),108914',
'MILLING MACHINES,adc,ADCOCK-SHIPLEY (UK),105308',
'SURFACE GRINDER,kentu,KENT (USA),109014',
'MILLING MACHINES,vernier,VERNIER-SA (FRANCE),105408',
'SURFACE GRINDER,supraa,ACER (TAIWAN),109114',
'MILLING MACHINES,jafo,JAFO JAROCIN,105508',
'SURFACE GRINDER,kolee,K.O.LEE (USA),109214',
'SURFACE GRINDER,elb,ELB (GERMAN),109314',
'SURFACE GRINDER,mini,MININI TH/N (ITALY),109414',
'SURFACE GRINDER,accu,OKAMOTO (JAPAN),109514',
'SURFACE GRINDER,bset,BROWN & SHARPE (USA),109614',
'SURFACE GRINDER,bse,BROWN & SHARPE (USA),109714',
'MILLING MACHINES,caser,CASER SAIMP (ITALY),105608',
'MILLING MACHINES,indumau,INDUMA (ITALY),105708',
'SURFACE GRINDER,alexa,ALEX (BOMBAY),109814',
'SURFACE GRINDER,prothp,PROTH (TAIWAN),109914',
'SURFACE GRINDER,stanko,STANKO (USSR),110114',
'SURFACE GRINDER,deltaa,DELTA (ITALY),110214',
'SURFACE GRINDER,alpha,ALPA (ITALY),110314 old',
'SURFACE GRINDER,bloh,BLOHM (GERMAN),110414',
'SURFACE GRINDER,wmwg,WMW (GERMANY),110514',
'MILLING MACHINES,okk,OKK (JAPAN),105808',
'TOOL AND CUTTER GRINDER,praga,PRAGA,110615',
'MILLING MACHINES,supermax,SUPERMAX (TAIWAN),105908',
'TOOL AND CUTTER GRINDER,cincinna,CINCINNATI (USA),110715',
'TOOL AND CUTTER GRINDER,toshosti,TOS HOSTIVAR (CZECHOSLOVAKIA),110815',
'MILLING MACHINES,batliboi,BATLIBOI (SURAT),106008',
'VMC,haaso,HAAS,110916',
'MILLING MACHINES,elliot,ELLIOT (UK),106108',
'VMC,feelere,FEELER (TAIWAN),111016',
'MILLING MACHINES,secmu,SECMU (ITALY),106208',
'VTL,micromake,MICROMAKE (AHMEDABAD),111217',
'MILLING MACHINES,vernier,VERNIER (FRANCE),106308',
'MILLING MACHINES,rambaudi,RAMBAUDI VERSAMIL (ITALY),106408',
'MILLING MACHINES,microcut,MICROCUT(TAIWAN),11708',
'MILLING MACHINES,cmb,CMB(ITALY),111808',
'MILLING MACHINES,arnon,ARNO-NOMO(ITALY),111908',
'MILLING MACHINES,arex,AREX(ITALY),112108',
'MILLING MACHINES,tiger,TIGER(ITALY),112208',
'MILLING MACHINES,stankor,STANKO (USSR),112308',
'MILLING MACHINES,bulgaria,BULGARIA,112408',
'SURFACE GRINDER,blohmg,BLOHM(GERMAN),111414',
'LATHE,colchester,COLCHESTER-1800(ENGLAND),114318',
'LATHE,pinacho,PINACHO(SPAIN),114418',
'LATHE,daejung,DAEJUNG(KOREA),114518',
'LATHE,daewoo,DAEWOO(KOREA),114618',
'LATHE ,majska,PRVOMAJSKA,114718',
'LATHE,dainichi,DAINICHI(JAPAN),114818',
'LATHE,stanke,STANKO(RUSSIA),114918',
'LATHE,somatec,SOMATEC(TAIWAN),115018',
'LATHE,charles,CHARLES(TAIWAN),115118',
'LATHE,mecca,MECCA_TURN(KOREA),115218',
'LATHE,namsun,NAMSUN(KOREA),115318',
'LATHE,compasss,COMPASS(TAIWAN),115518',
'LATHE,dainichii,DAINICHI(JAPAN),115618',
'LATHE,victor,VICTOR(TAIWAN),115718',
'LATHE,hmtt,HMT(INDIA),115818',
'LATHE,china,CHINA,115918',
'LATHE,daejungef,DAEJUNG(KOREA),116018',
'LATHE,nantong,NANTONG SHANDE(TAIWAN),116118',
'LATHE,jet,JET(TAIWAN),116218',
'LATHE,prvo,PRVOMAJSKAA,116318',
'LATHE,russian,RUSSIAN,116418',
'LATHE,cholchester,COLCHESTER(ENGLAND),116518',
'LATHE,stankothree,STANKKO(RUSSIA),116618',
'LATHE,sheyang,SHEYANG(CHINA),116718',
'LATHE,hmt26,HMT(INDIA),116818',
'LATHE,ticino,EST TICINO 400 (ITALY),116918',
'LATHE,romania,ROMANIA,117018',
'LATHE,dainichish,DAINICHII(JAPAN),117218',
'LATHE,wmw31,WMW 3 IN 1 (GERMAN),117318',
'PILLAR DRILL,pwmw,WMW(GERMANY),117419',
'PILLAR DRILL,arboga,ARBOGA(SWEDEN),117519',
'PILLAR DRILL,arboga26,ARBOGAA(SWEDEN),117619',
'PILLAR DRILL,arboga30,ARBOGGA(SWEDEN),117719',
'PILLAR DRILL,chinaa,CHINA,117819',
'PILLAR DRILL,gromotio,GROMOTIO(CHINA),117919',
'PILLAR DRILL,poland,POLAND,118019',
'PILLAR DRILL,kingston,KINGSTON(TAIWAN),118119',
'PILLAR DRILL,prvoo,PRVOMAJJSKA,118319',
'PILLAR DRILL,mill,MILL(TAIWAN),118719',
'PILLAR DRILL,dainnichi,DAINICHI(JAPAN),118819',
'PILLAR DRILL,daiinichi,DAIINICHI(JAPAN),118919',
'PILLAR DRILL,mikuni,MIKUNI(JAPAN),119019',
'PILLAR DRILL,young,YOUNG(KOREA),119119',
'PILLAR DRILl,jett,JET(TAIWAN),119219',
'RADIAL DRILL,bredaa,BREDA(ITALY),106810',
'RADIAL DRILL,bergonzi,BERGONZI(ITALY),113910',
'RADIAL DRILL,turnpro,TURN PRO(TAIWAN),114010',
'RADIAL DRILL,soraluce,SORALUCE(ITALY),114110',
'BORING,siphy6,SIP(SWITZERLAND),112702',
'SURFACE GRINDER,colmatic,COLMATIC(ITALY),112914',
'SURFACE GRINDER,jsuk,JONES & SHIPMAN(UK),113014',
'SURFACE GRINDER,chevsuper,CHEVALIER(TAIWAN),113114',
'SURFACE GRINDER,chev2a,CHEVALIER(TAIIWAN),113214',
'SURFACE GRINDER,sunny,SUNNY(TAIWAN),113314',
'SURFACE GRINDER,chev1224,CHEVALIER(TAIWAN),113614',
'SURFACE GRINDER,chev2a818,CHEVALIER (TAIWAN),113714',
'TOOL AND CUTTER GRINDER,makino,MAKINO(JAPAN),113415',
'TOOL AND CUTTER GRINDER,cin,CINCINNATI(USA),113515',
'CNC TURNING,star,STAR(JAPAN),113804',
'LATHE,DALIAN,DALIAN (CHINA),120318',
'LATHE,Famot,FAMOT (POLAND),119518',
'CNC TURNING,JYOTI TMC,JYOTI(RAJKOT),119404',
'LATHE,IKEGAI,IKEGAI (JAPAN),117118',
'SURFACE GRINDER,LODI,LODI (ITALY),120014',
'LATHE,VICTORN,VICTOR (TAIWAN),120418',
'LATHE,WMW DPS,WMW 3 IN 1 (GERMAN),117318',
'SURFACE GRINDER,RAMCO,RAMCO (TAIWAN),119314',
'MILLING MACHINES,G.DUFOUR,G.DUFOUR (FRANCE),119908',
'RADIAL DRILL,GSP,GSP (FRANCE),112510',
'VMC,AWEA,AWEA (TAIWAN),119816',
'RADIAL DRILL,IKEDA,IKEDA (JAPAN),111610',
'RADIAL DRILL,SASS,SASS (ITALY),119710',
'VMC,Hurco,HURCO (USA),119616',
'LATHE,DAEWOON,DAEWOO (KOREA),120518',
'PILLAR DRILL,iba victoria,IBA VICTORIA,118419',
'PILLAR DRILL,yoshida600,YOSHIDA (JAPAN),118619',
'PILLAR DRILL,yoshida640,YOSHIDA (JAPAN),118519',
'LATHE,CHARLES1,CHARLES (TAIWAN),120718',
'SURFACE GRINDER,ALPA550,ALPA (ITALY),120614',
'PILLAR DRILL,CONDOR,SUPER CONDOR,121219',
'PILLAR DRILL,JET1,JET (TAIWAN),121419',
'PILLAR DRILL,MODIG,MODIG (SWEDEN),121319',
'RADIAL DRILL,BREDA1,BREDA (ITALY),120810',
'VMC,TOPWELL,TOPWELL (TAIWAN),120916',
'PILLAR DRILL,ARBOGA1,ARBOGA (SWEDEN),121119',
    ];
    $( "#tags" ).autocomplete({
      source: availableTags,
      close: function(event, ui) {

        var data = $('#tags').val();
        console.log(data);

        var spliter =  data.split(',');
        console.log(spliter);

        if ( data.length < 5) {
            alert('not found');
        }
        else {

        window.location.href = "product-indi.php?stock=" +spliter[3];
    }
      } 
    });
  } );
  </script>