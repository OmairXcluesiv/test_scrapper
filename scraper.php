<?

// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
$html = scraperwiki::scrape("http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_nkw=American+Revolutionary+War&_pgn=3&_skc=50&rt=nc");

$max_loop = 50;
for($i=0;$i<=$max_loop;$i++){
 $dom = new simple_html_dom();
 $dom->load($html);
 $r = $dom->find("a.vip");
 $m = $dom->find("li.lvprice");

  echo $r[$i];
  echo $m[$i];
}
  
//
// // Find something on the page using css selectors
// $dom = new simple_html_dom();
// $dom->load($html);
// print_r($dom->find("table.list"));
//
// // Write out to the sqlite database using scraperwiki library
// scraperwiki::save_sqlite(array('name'), array('name' => 'susan', 'occupation' => 'software developer'));
//
// // An arbitrary query against the database
// scraperwiki::select("* from data where 'name'='peter'")

// You don't have to do things with the ScraperWiki library.
// You can use whatever libraries you want: https://morph.io/documentation/php
// All that matters is that your final data is written to an SQLite database
// called "data.sqlite" in the current working directory which has at least a table
// called "data".
?>
