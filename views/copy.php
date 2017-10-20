<div id="parallax-partners">
                        <?php
                        $cms = Model_BSX_CMS::init();
                        $partners = $cms::getHtmlBlock('PARTNERZY');
                        //BinUtils::pr($partners);

                        if (isset($partners['photos'])) {
                            $first = true;
                            $output = '';
                            foreach ($partners['photos'] as $index=>$photo) {
                                $output.= '<div class="client-wrap partnerDiv ';
                                if ($first) $output.= ' first';
                                $output.= '"><img src="'.Model_BSX_Core::cache_img($photo['ptable'],$photo['pid'],$photo['apname'],170,170,102).'" alt=""></div>';
                                $first = false;
                            }
                            echo $output;
                            echo $output;
                        }
                        ?>
                    </div>