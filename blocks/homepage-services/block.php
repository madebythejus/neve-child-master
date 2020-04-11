<div class="theHeroContainer">
    <div class="welcomeContainer heroInnerContainer">
        <div>
            <h1><?php block_field( 'welcome-title' ); ?></h1>
            <h4 class="fontSlim"><?php block_field( 'welcome-text' ); ?></h4>
        </div>
        <div class="lastItem">
            <div class="sideBySide">
                <!-- <span class="dashicons dashicons-clock"></span> -->
                <svg width="1.4em" height="1.4em" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>
                <h4><?php block_field( 'welcome-timings' ); ?></h4>
            </div>
            <div class="sideBySide">
                <!-- <span class="dashicons dashicons-location-alt"></span> -->
                <svg width="1.4em" height="1.4em" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>
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