<?php
$photo_impressions_settings = get_option('photo_impressions_settings');
$data = [];
$data['avatar' . 0] = isset($photo_impressions_settings['avatar_field']) ? $photo_impressions_settings['avatar_field'] : '';
$data['caption' . 0] = isset($photo_impressions_settings['caption_field']) ? $photo_impressions_settings['caption_field'] : '';

for ($i = 1; $i < count(array_count_values($photo_impressions_settings)); $i++) {
    $data['avatar' . $i] = isset($photo_impressions_settings['avatar_field_' . $i]) ? $photo_impressions_settings['avatar_field_' . $i] : '';
    $data['caption' . $i] = isset($photo_impressions_settings['caption_field_' . $i]) ? $photo_impressions_settings['caption_field_' . $i] : '';
}
?>

<?php if (!wp_is_mobile()) { ?>
    <section id="photo-impressions" class="photo-impressions-section">
        <!-- put div around each photo because box-sizing: border-box is not working on img -->

        <div class="photo-wrap-desktop">
            <div class="row1">
                <div class="row1-col1">

                    <div class="row1-col1-photo1">
                        <img class="photo" src="<?= $data['avatar' . 0]; ?>" alt="photo">
                        <p class="caption" id="pic1"
                           style="display: none;"><?= htmlspecialchars($data['caption' . 0]); ?></p>
                    </div>
                    <div class="row1-col1-photo2">
                        <img class="photo" src="<?= $data['avatar' . 1]; ?>" alt="photo1">
                        <p class="caption" id="pic2"
                           style="display: none;"><?= htmlspecialchars($data['caption' . 1]); ?></p>
                    </div>
                    <div class="row1-col1-photo3">
                        <img class="photo" src="<?= $data['avatar' . 2]; ?>" alt="photo2">
                        <p class="caption" id="pic3"
                           style="display: none;"><?= htmlspecialchars($data['caption' . 2]); ?></p>
                    </div>
                </div>

                <div class="row1-col2">

                    <div class="row1-col2-photo1">
                        <img class="photo" src="<?= $data['avatar' . 3]; ?>" alt="photo3">
                        <p class="caption" id="pic4"
                           style="display: none;"><?php echo htmlspecialchars($data['caption' . 3]); ?></p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="row1-col3">
                    <div class="row1-col3-row1">
                        <div class="row1-col3-row1-photo1">
                            <img class="photo" src="<?= $data['avatar' . 4]; ?>" alt="photo4">
                            <p class="caption" id="pic5"
                               style="display: none;"><?= htmlspecialchars($data['caption' . 4]); ?></p>
                        </div>
                        <div class="row1-col3-row1-photo2">
                            <img class="photo" src="<?= $data['avatar' . 5]; ?>" alt="photo5">
                            <p class="caption" id="pic6"
                               style="display: none;"><?= htmlspecialchars($data['caption' . 5]); ?></p>
                        </div>

                    </div>

                    <div class="row1-col3-row2">
                        <div class="row1-col3-row2-photo1">
                            <img class="photo" src="<?= $data['avatar' . 6]; ?>" alt="photo6">
                            <p class="caption" id="pic7"
                               style="display: none;"><?= htmlspecialchars($data['caption' . 6]); ?></p>
                        </div>
                        <div class="row1-col3-row2-photo2">
                            <img class="photo" src="<?= $data['avatar' . 7]; ?>" alt="photo7">
                            <p class="caption" id="pic8"
                               style="display: none;"><?= htmlspecialchars($data['caption' . 7]); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row2">
                <div class="row2-photo1">
                    <img class="photo" src="<?= $data['avatar' . 8]; ?>" alt="photo8">
                    <p class="caption" id="pic9"
                       style="display: none;"><?= htmlspecialchars($data['caption' . 8]); ?></p>
                </div>
                <div class="row2-photo2">
                    <img class="photo" src="<?= $data['avatar' . 9]; ?>" alt="photo9">
                    <p class="caption" id="pic10"
                       style="display: none;"><?= htmlspecialchars($data['caption' . 9]); ?></p>
                </div>
                <div class="row2-photo3">
                    <img class="photo" src="<?= $data['avatar' . 10]; ?>" alt="photo10">
                    <p class="caption" id="pic11"
                       style="display: none;"><?= htmlspecialchars($data['caption' . 10]); ?></p>
                </div>
                <div class="row2-photo4">
                    <img class="photo" src="<?= $data['avatar' . 11]; ?>" alt="photo11">
                    <p class="caption" id="pic12"
                       style="display: none;"><?= htmlspecialchars($data['caption' . 11]); ?></p>
                </div>
            </div>
        </div>

        <div class="photo-impression">
		<span class="close" onclick="closePhoto()">
			<p>X</p>
		</span>
            <img class="photo" src="" id="photo-impression-popup">
            <div id="caption"></div>
        </div>

    </section>

    <div id="cover" class="dim-page" onclick="closePhoto()"></div>


<?php } else { ?>
    <?php
    $random_photo = [];
    for ($i = 0; $i < 12; $i++) {
        $random_photo['avatar' . $i] = $data['avatar' . $i];
    }
    ?>
    <section class="photo-impressions-section-mobile">
        <ul class="mobile-photo-slider">
            <li class="mobile-photo-slider-item">
                <img class="mobile-photo" src="<?= $random_photo[array_rand($random_photo)] ?>" onerror="this.src='<php bloginfo('stylesheet_directory'); ?>/img/teams.jpg'">
            </li>
        </ul>
    </section>
<?php } ?>