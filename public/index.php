
<?php
    require '../vendor/autoload.php';

	$instagramBussisness = new SocialNetworkApi\Instagram\Client([
      'apiKey'      => '',
      'apiSecret'   => '',
      'apiCallback' => 'https://mylouder.starforge.com.br/instagram/teste',
      'scope'       => [
        'instagram_business_basic',
        'instagram_business_content_publish',
        'instagram_business_manage_messages',
        'instagram_business_manage_comments',
        // 'instagram_graph_user_media',
        // 'instagram_graph_user_profile',
      ],
      
    ]);

    echo "<a href='{$instagramBussisness->getLoginUrl()}'>Login with Instagram</a>";
    echo "<br>";


    $instagram = new SocialNetworkApi\Facebook\Client([
      'apiKey'      => '',
      'apiSecret'   => '',
      'apiCallback' => 'https://mylouder.starforge.com.br/login/facebook/callback',
      'scope'       => [
        'public_profile',
        // 'instagram_business_content_publish',
        // 'instagram_business_manage_messages',
        // 'instagram_business_manage_comments',
        // 'instagram_graph_user_media',
        // 'instagram_basic',
        // 'instagram_graph_user_profile',
      ],
    ]);
    echo "<a href='{$instagram->getLoginUrl()}'>Login with Facebook</a>";



