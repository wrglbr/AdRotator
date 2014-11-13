<!DOCTYPE html>
<html lang="{{ language:language_alias }}">
    <head>
        <meta charset="utf-8">
        <title><?php echo $template['title'];?></title>
        <?php echo $template['metadata'];?>
        <link rel="icon" href="{{ site_favicon }}">
        <!-- Le styles -->
        <?php
            //var_dump($controller_instance);
            $asset = new CMS_Asset();
            if($__is_bootstrap_cdn_connected){
                $asset->add_css('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
            }else{  
                $asset->add_cms_css('bootstrap/css/bootstrap.min.css');
            }
            $asset->add_themes_css('bootstrap.min.css', '{{ used_theme }}', 'default');
            $asset->add_themes_css('style.css', '{{ used_theme }}', 'default');
            echo $asset->compile_css();
        ?>
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="{{ site_favicon }}">
        {{ widget_name:section_custom_script }}
    </head>
    <body>
        <?php
            if($__is_bootstrap_cdn_connected){
                $asset->add_js('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js');
            }else{  
                $asset->add_cms_js("bootstrap/js/bootstrap.min.js");
            }
            $asset->add_themes_js('script.js', '{{ used_theme }}', 'default');
            echo $asset->compile_js();
        ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        {{ widget_name:section_top_fix }}
        <div class="container">
            <div class="row-fluid">
                <div id="__section-banner">
                    {{ widget_name:section_banner }}
                </div>
                <div>     
                    <div id="__section-left-and-content" class="col-md-9">
                        <div>{{ navigation_path }}</div><hr />
                        <div>
                            <div id="__section-left" class="hidden">{{ widget_name:section_left }}</div>
                            <div id="__section-content" class="col-md-12"><?php echo $template['body'];?></div>
                        </div>
                    </div><!--/#layout-content-->
                    <div id="__section-right" class="col-md-3">
                        {{ widget_name:section_right }}
                    </div><!--/#layout-widget-->
                </div>
            </div><!--/row-->
          <hr>
        </div><!--/.fluid-container-->
        <footer>{{ widget_name:section_bottom }}</footer>
        <script type="text/javascript">
            $(document).ready(function(){            
                // if section-left is empty, remove it
                if($.trim($('#__section-left').html()) == ''){
                    $('#__section-left').remove();        
                }else{
                    $('#__section-content').removeClass('col-md-12');
                    $('#__section-content').addClass('col-md-9');
                    $('#__section-left').removeClass('hidden');
                    $('#__section-left').addClass('col-md-3');
                }
                // if section-right is empty, remove it
                if($.trim($('#__section-right').html()) == ''){
                    $('#__section-right').remove();
                    $('#__section-left-and-content').removeClass('col-md-9');
                    $('#__section-left-and-content').addClass('col-md-12');
                }
                // if section-banner is empty, remove it
                if($.trim($('__section-banner').html()) == ''){
                    $('__section-banner').remove();
                }            
            });
        </script>
    </body>
</html>