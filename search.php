<!DOCTYPE html> 
<html lang="en"> 
<head>
  <!-- Google Tag Manager Head -->
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KW2XNGZ');</script>
<!-- End Google Tag Manager -->
       
    
	<title >Achive -  University of St Andrews</title >
    
    <!-- JSON LD formatted breadcrumb information -->  
    <script type="application/ld+json">{"@context": "https://schema.org","@type": "BreadcrumbList","itemListElement": [{"@type": "ListItem","position": 1,"name": "Archive","item": "https://archive.st-andrews.ac.uk/"}]}</script>    
    
    <meta name="channel-id" content="2">
    <meta name="section-id" content="8462">
       
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <meta name="copyright" content="Copyright &copy;  University of St Andrews" />
    <meta name="rating" content="general" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://www.st-andrews.ac.uk/~cdn/dpl/1.23.2/styles/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="https://www.st-andrews.ac.uk/~cdn/dpl/1.23.2/styles/print.css" rel="stylesheet" type="text/css" media="print" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00539b">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

    
  </head>
  <body>
    <!--noindex-->
    <!-- Google Tag Manager Body -->
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW2XNGZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- HEADER-->
<nav class="sr-only" aria-label="Accessibility links"><a href="#content-begin">Skip to content</a></nav>
    <header id="header">
        <div class="row">
            <div id="logo-container">
                <div id="header-logo"><a href="https://www.st-andrews.ac.uk/"><span>University of St Andrews</span></a></div>
            </div>
            <div id="header-search">
                <button class="btn btn-link" id="header-search-trigger" name="btnG" aria-label="Toggle search" value=""><i class="fa fa-search" title="Search"></i></button>
     <!-- <form action="https://www.st-andrews.ac.uk/search/" method="get" role="search" class="dpl-form">
          <div class="input-group">
              <span class="input-group-btn">
                  <button class="btn btn-link" id="header-search-close" aria-label="Hide search" name="btnG" type="button" value=""><i class="fa fa-times" title="Close"></i></button>
              </span>
              <input id="query" class="form-control search-box form-control--autocomplete" type="text" title="Enter search keywords" maxlength="256" name="query" placeholder="Search the University website" required/><button class="clear-icon clear-icon--indent" type="reset" aria-label="Reset" value="Reset"></button>
              <span class="input-group-btn">
                  <button class="btn btn-primary" id="header-search-submit" name="btnG" type="submit" value="Search" aria-label="Submit"><i class="fa fa-search" title="Search"></i></button>
              </span>
          </div>
          <input type="hidden" name="collection" value="Uosa-meta-global">
          <input type="hidden" name="profile" value="_default">
          <input type="hidden" name="form" value="partial">
      </form>-->
      <form action="http://localhost:8000/mike2.php" id="archive" class="dpl-form" method="get">
        <div class="input-group input-group-lg">           
            <input id="txt-search" aria-label="Search the University, use arrow keys to move between suggested search terms" class="form-control module-autocomplete search-box" type="text" title="Enter search keywords" maxlength="256" name="query" placeholder="Search by keyword, phrase" autocomplete="off">
<button class="clear-icon clear-icon--indent" type="reset" aria-label="Reset" value="Reset"></button>
            <span class="input-group-btn">
                <button id="modulesearch-button" class="btn btn-primary" value="Search" type="submit" aria-label="Submit">
                    <i class="fa fa-search" title="Search"></i>
                </button>
            </span>
        </div>
    </form>
            </div>
        </div>
    </header>

    
    <div id="category-header" aria-label="Category header">
  		<div class="container">
    		<h2><a href="https://archive.st-andrews.ac.uk/">Archive</a></h2>
  		</div>
	</div>
    
    <nav class="navigation-bar js-select-active" role="navigation">
	<div class="container">
		<div class="toggle-navigation primary-toggle"><a class="navigation-button">Navigation <i class="chevron down"></i></a></div>
		<ul class="navigation-bar-nav primary-nav"><li><a href="/graduation/">Graduation</a></li><li><a href="/courses/">Courses</a></li></ul>
	</div>
</nav>
	
    
<a name="content-begin"></a> 
<!--endnoindex-->


              
      
                    
   <?php      


// debug settings
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$query  = explode('&', $_SERVER['QUERY_STRING']);
$params = array();

if(count($query) > 0 && trim($query[0]) != '' && $query[0] != null){
   foreach( $query as $param )
      {
      
        list($name, $value) = explode('=', $param, 2);
        
        $params[urldecode(trim($name))][] = urldecode($value);
      }
}



// ---------------------- Setup defaults  --------------------------//

$baseUrl                         = "https://stage-shared-15-24-search.clients.uk.funnelback.com/s/search.html";
$defaultParams['collection']     = array("uosa-web--archive");
$defaultParams['profile']        = array("_default");
$defaultParams['form']           = array("master");
$defaultParams['start_rank']     = array("1");
$defaultParams['num.ranks'] = array(10);
$defaultParams['sort']           = array("relevance");
$defaultParams['mod']            = array(false);
$selectAll                       = True;
// $defaultParams['f.Year|ayrs'] = array('currentAcademicYear');
// $defaultParams['f.Year|ayrs']  = array();
$defaultParams['wildcard']  = array(false);
$sortKey=explode(',',str_replace(' ','','relevance'));
$sortValues=explode(',','relevance');

$sortOpt = array_combine($sortKey,$sortValues); // Sort options 
$defaultParams['sortopt'] = array(json_encode($sortOpt));
$defaultParams['query']   = array(($selectAll?"!null":''));
$_aContext      = array('http' => array('proxy' => '138.251.14.57:8080','request_fulluri' => true)); // web proxy settings
$cxContext      = stream_context_create($_aContext);
$replacements   = array('search.html' => '','<span class="sr-only"> for !null</span>' =>'', 'Of'=>'of', 'And ' =>'and ','*'=>'','office of the Principal' => 'Office of the Principal','office of The Principal' => 'Office of the Principal', 'OFFICE OF THE PRINCIPAL' => 'Office of the Principal');
$queryStr ='';



$params = array_merge($defaultParams,$params);
 $params['sortopt'] = '{"relevance":"Relevance"}';

if($params['query'][0] == '' && $selectAll ){
 $params['query'] = array('!null');
}


if(array_key_exists ('f.Year|AllDocumentsFill',$params) && array_key_exists ('f.Year|ayrs',$params)){   
   unset($params['f.Year|ayrs']); 
}

// ---------------------- Create query string   --------------------------//
foreach($params as $f => $v){
 if(is_array($v)){
   foreach($v as $i){
      if(strlen($i) > 0 ){
        switch (trim($i)) {
	       case 'currentAcademicYear':
	          $queryStr.=((strlen($queryStr)>0) ?'&':'?').trim(str_replace('|','%7C',str_replace('f_','f.',$f))).'='.currentAcademicYear();
	          break;           
	       default:
	       	  if ($params[urldecode(trim($f))]){
                 if($f == 'query'){
		           $queryStr.=((strlen($queryStr)>0) ?'&':'?').trim(str_replace('|','%7C',str_replace('f_','f.',$f))).'='.urlencode(trim(
                   str_replace('*','',str_replace('%2A','',str_replace("'",'"',$i))))).($params['wildcard'][0]?'%2A':'');
                 }else{
		            $queryStr.=((strlen($queryStr)>0) ?'&':'?').trim(str_replace('|','%7C',str_replace('f_','f.',$f))).'='.urlencode(trim(str_replace("'",'"',$i)));
		         }
	          }
          }         
     }  
   }
 }
}

// Function to get the current academic year 
function currentAcademicYear(){
   $now = new DateTime();
   $year =  $now->format('Y');
   $ayear = (($now->format('m') < 8) ? $year - 1 : $year);
   $nyear = $ayear + 1;
   $thisYear =  $ayear.'/'.substr($nyear, -1);
   return htmlentities(trim($thisYear));
} 

$queryString=$baseUrl.trim($queryStr);
 echo '<!-- m'.$queryString.'m -->';
// set content to the funnelback restults
 $content =  file_get_contents($queryString, false, $cxContext);
// $content =  file_get_contents($queryString);
                                    
$content = str_replace(array_keys($replacements), $replacements, $content);
                                   
?>


                                </div>
                            </div>
                            </div>
                            
                            <div class="container" id="body-search">
                                <div class="row ">
                                    <div class="col-md-12">
                                        <h1 class="page-heading">Archive</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <form id="archive" class="dpl-form" method="get">
                                            <div class="input-group input-group-lg">           
                                                <input id="txt-search" aria-label="Search the University, use arrow keys to move between suggested search terms" class="form-control module-autocomplete search-box" type="text" title="Enter search keywords" maxlength="256" name="query" placeholder="Search by keyword, phrase" autocomplete="off">
                            <button class="clear-icon clear-icon--indent" type="reset" aria-label="Reset" value="Reset"></button>
                                                <span class="input-group-btn">
                                                    <button id="modulesearch-button" class="btn btn-primary" value="Search" type="submit" aria-label="Submit">
                                                        <i class="fa fa-search" title="Search"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                        
                            
                            
                                   </div>
                                </div>
                            
                            
                            
                            <div class="container content">
                         <?php      if($content){
                                   echo $content;
                            
                               } 
                              ?>
                            </div>
                                          

<!--noindex-->
<footer id="footer">
    <div id="website-footer">
      <div id="d.en.2484" class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3>Your St&nbsp;Andrews</h3>
<ul>
<li><a href="https://www.st-andrews.ac.uk/students/">Current students</a></li>
<li><a href="https://www.st-andrews.ac.uk/pgstudents/">Postgraduate</a></li>
<li><a href="https://www.st-andrews.ac.uk/staff/">Staff</a></li>
<li><a href="https://www.st-andrews.ac.uk/semester-dates/">Semester dates</a></li>
<li><a href="https://www.vacancies.st-andrews.ac.uk/welcome.aspx">Jobs at St&nbsp;Andrews</a></li>
<li><a href="https://www.st-andrews.ac.uk/policy/">Policies, procedures and guidance</a></li>
</ul>
<h3>Navigation</h3>
<ul>
<li><a href="https://www.st-andrews.ac.uk/study/">Study at St&nbsp;Andrews</a></li>
<li><a href="https://www.st-andrews.ac.uk/subjects/">Subjects</a></li>
<li><a href="https://www.st-andrews.ac.uk/research/">Research</a></li>
<li><a href="https://www.st-andrews.ac.uk/alumni">Alumni and donors</a></li>
<li><a href="https://www.st-andrews.ac.uk/community/">Community facilities</a></li>
<li><a href="https://www.st-andrews.ac.uk/business-services/">Business services</a></li>
<li><a href="https://www.st-andrews.ac.uk/visiting/">Visiting</a></li>
<li><a href="https://www.st-andrews.ac.uk/about/">About</a></li>
<li><a href="https://news.st-andrews.ac.uk">News</a></li>
<li><a href="https://events.st-andrews.ac.uk/">Events</a></li>
<li><a href="https://www.st-andrews.ac.uk/contact/">Contact</a></li>
</ul>
          </div>
          <div class="col-sm-4">
            <h3>School websites</h3>
<ul>
<li><a href="https://www.st-andrews.ac.uk/art-history/">Art History</a></li>
<li><a href="https://www.st-andrews.ac.uk/biology/">Biology</a></li>
<li><a href="https://www.st-andrews.ac.uk/chemistry/">Chemistry</a></li>
<li><a href="https://www.st-andrews.ac.uk/classics/">Classics</a></li>
<li><a href="https://www.st-andrews.ac.uk/computer-science/">Computer Science</a></li>
<li><a href="https://www.st-andrews.ac.uk/divinity/">Divinity</a></li>
<li><a href="https://www.st-andrews.ac.uk/earth-sciences/">Earth and Environmental Sciences</a></li>
<li><a href="https://www.st-andrews.ac.uk/economics-finance/">Economics and Finance</a></li>
<li><a href="https://www.st-andrews.ac.uk/english/">English</a></li>
<li><a href="https://www.st-andrews.ac.uk/film-studies/">Film Studies</a></li>
<li><a href="https://www.st-andrews.ac.uk/geography-sustainable-development/">Geography and Sustainable Development</a></li>
<li><a href="https://www.st-andrews.ac.uk/graduate-school/">Graduate School</a></li>
<li><a href="https://www.st-andrews.ac.uk/history/">History</a></li>
<li><a href="https://www.st-andrews.ac.uk/international-relations/">International Relations</a></li>
<li><a href="https://www.st-andrews.ac.uk/management/">Management</a></li>
<li><a href="https://www.st-andrews.ac.uk/mathematics-statistics/">Mathematics and Statistics</a></li>
<li><a href="https://www.st-andrews.ac.uk/medicine/">Medicine</a></li>
<li><a href="https://www.st-andrews.ac.uk/modern-languages/">Modern Languages</a></li>
<li><a href="https://www.st-andrews.ac.uk/music/">Music</a></li>
<li><a href="http://www.st-andrews.ac.uk/philosophy/">Philosophy</a></li>
<li><a href="https://www.st-andrews.ac.uk/physics-astronomy/">Physics and Astronomy</a></li>
<li><a href="https://www.st-andrews.ac.uk/psychology-neuroscience/">Psychology and Neuroscience</a></li>
<li><a href="https://www.st-andrews.ac.uk/social-anthropology/">Social Anthropology</a></li>
</ul>
          </div>
          <div class="col-sm-4">
            <h3><a href="https://www.st-andrews.ac.uk/contacts">Contact us</a></h3>
<address>
<p><strong>University of St&nbsp;Andrews</strong><br>College Gate<br>St&nbsp;Andrews<br>KY16 9AJ</p>
<p><strong>Phone:</strong> +44 (0)1334 47 6161</p>
</address>
          </div>
        </div>
    </div>
  </div>

  <div id="university-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <p id="footer-charity" role="contentinfo">Â© 2020 The University of St&nbsp;Andrews is a charity registered in Scotland, No: SC013532</p>
          <ul id="footer-links">
<li><a class="footer-links__link cookie-control__open" aria-controls="ccc-module">Cookie preferences</a></li>
            <li><a href="https://www.st-andrews.ac.uk/terms/"  class="footer-links__link">Terms and conditions</a></li>
            <li><a href="https://www.st-andrews.ac.uk/help/" class="footer-links__link">Website help</a></li>
          </ul>
        </div>
        
        <div class="col-lg-4">
          <ul id="social">
             <li><a href="https://www.facebook.com/uniofsta"  class="footer-links__link"><span class="sr-only">Facebook</span><i class="fa fa-facebook-square fa-2x" title="Facebook"></i></a></li>
             <li><a href="https://twitter.com/univofstandrews/"  class="footer-links__link"><span class="sr-only">Twitter</span><i class="fa fa-twitter-square fa-2x" title="Twitter"></i></a></li>
             <li><a href="https://www.instagram.com/uniofstandrews"  class="footer-links__link"><span class="sr-only">Instagram</span><i class="fa fa-instagram fa-2x" title="Instagram"></i></a></li>
             <li><a href="https://www.youtube.com/uofstandrews"  class="footer-links__link"><span class="sr-only">YouTube</span><i class="fa fa-youtube-square fa-2x" title="YouTube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</footer>

<script src="https://www.st-andrews.ac.uk/~cdn/dpl/1.23.2/scripts/core.min.js" ></script>
<script src="https://www.st-andrews.ac.uk/s/resources-global/js/funnelback.autocompletion-2.6.0.js"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('.form-control--autocomplete').autocompletion({
      datasets: {
        organic: {
          collection: 'Uosa-meta-global',
          profile : '_default',
          program: 'https://www.st-andrews.ac.uk/s/suggest.json',
          format: 'extended',
          alpha: '0.5',
          show: '8',
          sort: '0',
          group: true
        },
      },
      typeahead: {hint: true},
      length: 3
    });
  });
</script>
<script>
  dataLayer.push({'event':'staScripts_Loaded'});
</script>
<!-- programmable layout - text/scripts -->



<!--endnoindex-->
</body > 
</html > 

