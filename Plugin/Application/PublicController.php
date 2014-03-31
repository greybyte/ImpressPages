<?php


namespace Plugin\Application;


class PublicController extends \Ip\Controller
{
    /**
     * Go to /day to see the result
     * @return \Ip\View
     */
    public function day($day = null)
    {
        // Uncomment to include assets
        // ipAddJs('assets/application.js');
        // ipAddCss('assets/application.css');

        if (!$day) {
            $day = date('l');
        }

        $data = array(
            'day' => $day
        );

        //change the layout if you like
        //ipSetLayout('home.php');

        return ipView('view/day.php', $data);
    }

    public function hmvc()
    {
        $request = new \Ip\Request();
        $request->setQuery(
            array(
                'pa' => 'Colorbox.hmvcTest', // 'pa' key means public controller.
                // A value contains a plugin name 'MyPlugin' and action name 'index'.
            )
        );
        $answer = ipApplication()->handleRequest($request)->getContent();
        //return 'test5';
        echo htmlspecialchars($answer); exit;

    }



}
