<?php
$query1 = "SELECT * FROM uy ";
$result1 = mysqli_query($link, $query1) or die("So'rov ishlamadi : " . mysqli_error($link));
while ($line1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
    echo "
            <div class='carousel-item-b swiper-slide'>
              <div class='card-box-a card-shadow'>
                <div class='img-box-a'>
                  <img src='{$line1['photo']}'  class='img-a img-fluid'>
                </div>
                <div class='card-overlay'>
                  <div class='card-overlay-a-content'>
                    <div class='card-header-a'>
                      <h2 class='card-title-a'>
                        <a href='#'>{$line1['headline']}</a>
                      </h2>
                    </div>
                    <div class='card-body-a'>
                      <div class='price-box d-flex'>
                        <span class='price-a'>oyiga | $ {$line1['price']}</span>
                      </div>
                      <a href='#' class='link-a'>Ko'proq
                        <span class='bi bi-chevron-right'></span>
                      </a>
                    </div>
                    <div class='card-footer-a'>
                      <ul class='card-info d-flex justify-content-around'>
                        <li>
                          <h4 class='card-info-title'>Hudud</h4>
                          <span>{$line1['type_id']}
                          </span>
                        </li>
                        <li>
                          <h4 class='card-info-title'>Honalar</h4>
                          <span>{$line1['rooms']}</span>
                        </li>
                        <li>
                          <h4 class='card-info-title'>Qavat</h4>
                          <span>{$line1['floors']}</span>
                        </li>
                        <li>
                          <h4 class='card-info-title'>Uslubi</h4>
                          <span>{$line1['status']}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
}
mysqli_free_result($result1);
mysqli_close($link);
?>
