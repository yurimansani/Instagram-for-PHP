
<?php
    require '../vendor/autoload.php';

      'apiKey'      => '{{your_app_key}}',
      'apiSecret'   => '{{YOUR_APP_SECRET}}',
	$instagramBussisness = new Andreyco\Instagram\Client([
      'apiCallback' => 'https://mylouder.starforge.com.br/instagram/teste',
      'scope'       => array(
      'scope'       => [
        'instagram_business_basic',
        'instagram_business_content_publish',
        'instagram_business_manage_messages',
        'instagram_business_manage_comments',
        // 'instagram_graph_user_media',
        // 'instagram_graph_user_profile'
      ],
      
    ]);

    echo "<a href='{$instagramBussisness->getLoginUrl()}'>Login with Instagram</a>";
    echo "<br>";


    $instagram = new Andreyco\Instagram\Client([

    ]);
    echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";



