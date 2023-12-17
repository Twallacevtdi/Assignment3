<?php
    require 'vendor/autoload.php';
    
    class SendEmail
        {
            public static function SendMail($to, $subject, $content)
                {
                    $key = 'Cw.w5MBzvV2KQ7yn2G.mzdRA-oLJC7VAu6V7GRCOOpkn3M97JrC4SrK8-2j-MiTsgce7G';
                    $email = new \SendGrid\Mail\Mail();
                    $email->setFrom("twallace20j@vtdi.edu.jm", "Toni-Ann Wallace");
                    $email->setSubject($subject);
                    $email->addto($to);
                    $email->addContent("text/html", $content);

                    $sendgrid = new \SendGrid($key);

                    try
                        {
                            $response = $sendgrid->send($email);
                            return $response;
                        }

                    catch (Exception $e)
                        {
                            echo 'Email exception caught: '. $e->getMessage() . "\n";
                            return false;
                        }
                }
        }
?>