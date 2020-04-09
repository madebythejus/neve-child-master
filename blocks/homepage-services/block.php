<div class="theHeroContainer">
    <div class="welcomeContainer heroInnerContainer">
        <div>
            <h1><?php block_field( 'welcome-title' ); ?></h1>
            <h4 class="fontSlim"><?php block_field( 'welcome-text' ); ?></h4>
        </div>
        <div class="lastItem">
            <div class="sideBySide">
                <span class="dashicons dashicons-clock"></span>
                <h4><?php block_field( 'welcome-timings' ); ?></h4>
            </div>
            <div class="sideBySide">
                <span class="dashicons dashicons-location-alt"></span>
                <h4><?php block_field( 'welcome-location' ); ?></h4>
            </div>

        </div>
    </div>


    <div class="servicesContainer heroInnerContainer">
        <div class="servicesItem">
            <img width="50" height="50" src='<?php block_field( 'first-icon' ); ?>' title='' />
            <div class="servicesTextItems">
                <h4 class="servicesTitle"><?php block_field( 'first-item' ); ?></p>
                </h4>
                <p class="servicesDescription"><?php block_field( 'first-description' ); ?></p>
            </div>
        </div>
        <div class="servicesItem">
            <img width="50" height="50" src='<?php block_field( 'second-icon' ); ?>' title='' />
            <div class="servicesTextItems">
                <h4 class="servicesTitle"><?php block_field( 'second-item' ); ?></p>
                </h4>
                <p class="servicesDescription"><?php block_field( 'second-description' ); ?></p>
            </div>
        </div>
        <div class="servicesItem">
            <img width="50" height="50" src='<?php block_field( 'third-icon' ); ?>' title='' />
            <div class="servicesTextItems">
                <h4 class="servicesTitle"><?php block_field( 'third-item' ); ?></p>
                </h4>
                <p class="servicesDescription"><?php block_field( 'third-description' ); ?></p>
            </div>
        </div>
        <div class="servicesItem">
            <img width="50" height="50" src='<?php block_field( 'fourth-icon' ); ?>' title='' />
            <div class="servicesTextItems">
                <h4 class="servicesTitle"><?php block_field( 'fourth-item' ); ?></p>
                </h4>
                <p class="servicesDescription"><?php block_field( 'fourth-description' ); ?></p>
            </div>
        </div>
    </div>
</div>