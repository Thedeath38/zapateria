<div class="col-md-3 col-sm-12 col-xs-12">
                <div class="right-side">
                    <div class="text-title">
                        <h6>Search</h6>
                    </div>
                    <div class="search-box">
                        <form method="post" action="index.html">
                            <input type="search" name="search" placeholder="Enter to Search" required="">
                        </form>
                    </div>
                    <!--Categorías de los post-->
                    <div class="categorise-menu">
                        <div class="text-title">
                            <h6>Categories</h6>
                        </div>
                        <ul class="categorise-list">
                            <?php
                                //wp_list_categories(); // Mostrar el listado de categorías, Para quitar el titulo de 'Categorías' por defecto le pasamos los siguientes argumentos:
                                $args = array(
                                    //Eliminar el título
                                    'title_li' => '',
                                    //Mostrar el número de post por categoría
                                    'show_count' => true,
                                    //Que no se muestren sin un echo
                                    'echo' => false
                                );
                                
                                $catgs = wp_list_categories($args);
                                $catgs = preg_replace('/<\/a> \(([0-9]+)\)/', '<span class="catnum"> Entradas publicadas: \\1</span></a>', $catgs);
                                echo $catgs;
                            ?>
                        </ul>                           
                    </div>
                    <!--Fin Categorías de los post-->
                    
                    <!--Autores-->
                    <div class="widget widget-archives">
                    <!-- widget archives -->
                    <div class="text-title">
                                        <h6>Autores</h6>
                                    </div>
                    <ul class="listnone">
                        <?php
                        
                            $autores = wp_list_authors('hide_empty=0');
                         
                        ?>
                    </ul>
                </div>
                    <!--Fin Autores-->
                    <div class="tag-list">
                        <div class="text-title">
                            <h6>Tags</h6>
                        </div>
                        <?php
                        wp_tag_cloud();
                        ?>
                    </div>
                </div>
            </div>