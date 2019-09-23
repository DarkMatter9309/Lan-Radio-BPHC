
<ul class="sb2" id="sb_home">
    <li><h4 class="header"><span class="sidebar-header-title" title="<?php echo T_('Browse Music'); ?>"><?php echo T_('Music'); ?></span><img src="<?php echo AmpConfig::get('web_path') . AmpConfig::get('theme_path'); ?>/images/icons/icon_all.png" class="header-img <?php echo ($_COOKIE['sb_browse_music'] == 'expanded') ? 'expanded' : 'collapsed'; ?>" id="browse_music" lt="<?php echo T_('Expand/Collapse'); ?>" title="<?php echo T_('Expand/Collapse'); ?>" /></h4>
        <?php
        if (isset($_REQUEST['action'])) {
            $text    = scrub_in($_REQUEST['action']) . '_ac';
            ${$text} = ' selected="selected"';
        }
        ?>
        <ul class="sb3" id="sb_browse_music">
            <li id="sb_home_browse_music_songTitle"><a href="<?php echo $web_path; ?>/browse.php?action=song"><?php echo T_('Song Titles'); ?></a></li>
            <li id="sb_home_browse_music_album"><a href="<?php echo $web_path; ?>/browse.php?action=album"><?php echo T_('Albums'); ?></a></li>
            <li id="sb_home_browse_music_artist"><a href="<?php echo $web_path; ?>/browse.php?action=artist"><?php echo T_('Artists'); ?></a></li>
            <?php if (AmpConfig::get('label')) {
            ?>
            <li id="sb_home_browse_music_label"><a href="<?php echo $web_path ?>/browse.php?action=label"><?php echo T_('Labels') ?></a></li>
            <?php
        } ?>
            <li id="sb_home_browse_music_tags"><a href="<?php echo $web_path; ?>/browse.php?action=tag"><?php echo T_('Genres'); ?></a></li>
            <li id="sb_home_browse_music_playlist"><a href="<?php echo $web_path; ?>/browse.php?action=playlist"><?php echo T_('Playlists'); ?></a></li>
            <?php if (AmpConfig::get('channel')) {
            ?>
            <li id="sb_home_browse_music_channel"><a href="<?php echo $web_path ?>/browse.php?action=channel"><?php echo T_('Channels') ?></a></li>
            <?php
        } ?>
            <?php if (AmpConfig::get('broadcast')) {
            ?>
            <li id="sb_home_browse_music_broadcast"><a href="<?php echo $web_path ?>/browse.php?action=broadcast"><?php echo T_('Broadcasts') ?></a></li>
            <?php
        } ?>
            <?php if (AmpConfig::get('live_stream')) {
            ?>
            <li id="sb_home_browse_music_radioStation"><a href="<?php echo $web_path ?>/browse.php?action=live_stream"><?php echo T_('Radio Stations') ?></a></li>
            <?php
        } ?>
            <?php if (AmpConfig::get('podcast')) {
            ?>
            <li id="sb_home_browse_music_podcast"><a href="<?php echo $web_path ?>/browse.php?action=podcast"><?php echo T_('Podcasts') ?></a></li>
            <?php
        } ?>
            <?php if (AmpConfig::get('allow_upload') && Access::check('interface', '25')) {
            ?>
            <li id="sb_home_browse_music_upload"><a href="<?php echo $web_path ?>/upload.php"><?php echo T_('Upload') ?></a></li>
            <?php
        } ?>
        </ul>
    </li>
    <?php if (AmpConfig::get('allow_video')) {
            ?>
        <li><h4 class="header"><span class="sidebar-header-title"><?php echo T_('Video') ?></span><img src="<?php echo AmpConfig::get('web_path') . AmpConfig::get('theme_path'); ?>/images/icons/icon_all.png" class="header-img <?php echo ($_COOKIE['sb_browse_video'] == 'expanded') ? 'expanded' : 'collapsed'; ?>" id="browse_video" lt="<?php echo T_('Expand/Collapse'); ?>" title="<?php echo T_('Expand/Collapse'); ?>" /></h4>
            <ul class="sb3" id="sb_home_browse_video">
                <li id="sb_home_browse_video_video"><a href="<?php echo $web_path ?>/browse.php?action=personal_video"><?php echo T_('Educational Videos') ?></a></li>
                <li id="sb_home_browse_video_movie"><a href="<?php echo $web_path ?>/browse.php?action=movie"><?php echo T_('Movies') ?></a></li>
                <li id="sb_home_browse_video_tvShow"><a href="<?php echo $web_path ?>/browse.php?action=tvshow"><?php echo T_('TV Shows') ?></a></li>
                <li id="sb_home_browse_video_clip"><a href="<?php echo $web_path ?>/browse.php?action=clip"><?php echo T_('Music Clips') ?></a></li>
                <li id="sb_home_search_video"><a href="<?php echo $web_path ?>/search.php?type=video"><?php echo T_('Search Videos') ?></a></li>
</ul>
        </li>
    <?php
        } ?>
    <?php
    if (AmpConfig::get('browse_filter')) {
        Ajax::start_container('browse_filters');
        Ajax::end_container();
    }
    ?>
    <?php if (Access::check('interface', '25')) {
        ?>

    <?php
    } ?>

    <li>
        <h4 class="header"><span class="sidebar-header-title" title="<?php echo T_('Random'); ?>"><?php echo T_('Random'); ?></span><img src="<?php echo AmpConfig::get('web_path') . AmpConfig::get('theme_path'); ?>/images/icons/icon_all.png" class="header-img <?php echo ($_COOKIE['sb_random'] == 'expanded') ? 'expanded' : 'collapsed'; ?>" id="random" alt="<?php echo T_('Expand/Collapse'); ?>" title="<?php echo T_('Expand/Collapse'); ?>" /></h4>
        <ul class="sb3" id="sb_home_random" style="<?php if (!isset($_COOKIE['sb_random'])) {
        echo 'display: none;';
    } ?>">
            <li id="sb_home_random_album"><?php echo Ajax::text('?page=random&action=song', T_('Song'), 'home_random_song'); ?></li>
            <li id="sb_home_random_album"><?php echo Ajax::text('?page=random&action=album', T_('Album'), 'home_random_album'); ?></li>
            <li id="sb_home_random_artist"><?php echo Ajax::text('?page=random&action=artist', T_('Artist'), 'home_random_artist'); ?></li>
            <li id="sb_home_random_playlist"><?php echo Ajax::text('?page=random&action=playlist', T_('Playlist'), 'home_random_playlist'); ?></li>
        </ul>
    </li>
    <li>
</ul>













