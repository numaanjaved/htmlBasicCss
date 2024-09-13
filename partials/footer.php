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
echo "</section>";
echo "</footer>";



//         <div class="sub_content">
//           <div class="text_content_footer_bottom">
//             <ul class="footer_items">
//               <li class="footer_list_item">
//                 <span id="copyright">&copy; Themes by psdfreebies.com</span>
//               </li>

//               <li class="footer_list_item">
//                 <a class="footer_list_item_link" href="/">Privacy</a>
//               </li>

//               <li class="footer_list_item">
//                 <a class="footer_list_item_link" href="/">Terms of Use</a>
//               </li>

//               <li class="footer_list_item">
//                 <a class="footer_list_item_link" href="/">Site Map</a>
//               </li>
//             </ul>
//           </div>
//         </div>
