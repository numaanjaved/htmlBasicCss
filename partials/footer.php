<?php
$name_of_companies = ["Company 1", "Company 2", "Company 3", "Company 4"];
$links_in_company = [
  ["About", "Approach", "Sustainability", "Careers", "News"],
  ["Scope", "Design", "Accountability", "Profession", "Media"],
  ["Product", "Development", "Services", "Sales", "Records"],
  ["Help", "Contact", "Policy", "What's New?", "Faq"],
];
$company_images_data = [
  ['src' => "./Assets/images/Company_img1.png", 'alt' => "Company Image"],
  ['src' => "./Assets/images/Company_img2.png", 'alt' => "Company Image"],
  ['src' => "./Assets/images/Company_img3.png", 'alt' => "Company Image"],
  ['src' => "./Assets/images/Company_img4.png", 'alt' => "Company Image"],
];

$footer_links = [
  ['text' => '&copy; Themes by psdfreebies.com'],
  ['text' => 'Privacy'],
  ['text' => 'Terms of Use'],
  ['text' => 'Site Map'],
];

echo "<footer class='footer'>";
echo "<section class='footer_section_content'>";
echo "<div class='main_content'>";
echo "<div class='text_content_div'>";

for ($i = 0; $i < count($name_of_companies); $i++) {
  echo "<div class='text_sub_content'>";
  echo "<h4 class='section_sub_heading'> ";
  echo $name_of_companies[$i];
  echo "</h4>";
  echo "<ul class='company_list'>";
  for ($j = 0; $j < count($links_in_company[$i]); $j++) {

    echo "<li class='company_list_items'><a class='company_item_link' href='#'>";
    echo $links_in_company[$i][$j];
    echo "</a></li>";
  }
  echo "</ul>";
  echo "</div>";
}
echo "</div>";
echo "<div class='img_content_div'>";
foreach ($company_images_data as $img) {
  echo "<div class='company_image'>";
  echo "<img src='" . $img['src'] . "' alt='" . $img['alt'] . "' />";
  echo "</div>";
}
echo "</div>";
echo "</div>";
echo "<div class='sub_content'>";
echo "<div class='text_content_footer_bottom'>";
echo "<ul class='footer_items'>";
foreach ($footer_links as $footer_Item) {
  if ($footer_Item['text'] == '&copy; Themes by psdfreebies.com') {
    echo "<li class='footer_list_item'>";
    echo  "<span id='copyright'>";
    echo $footer_Item['text'];
    echo "</span>";
    echo   "</li>";
  } else {
    echo "<li class='footer_list_item'>";
    echo "  <a class='footer_list_item_link' href='/'>";
    echo  $footer_Item['text'];
    echo "</a>";
    echo "</li>";
  }
}
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</section>";
echo "</footer>";
