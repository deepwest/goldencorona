<?

$tpl = 'home';
$article = $DB->query('SELECT * FROM main_article ')->fetch();

$titleSeo = $article['seotitle'];
$descriptionSeo = $article['seodescription'];
$keywordsSeo = $article['seokeywords'];


