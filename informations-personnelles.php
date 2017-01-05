<?php
$description = "A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. Give thanks to the most high.";

include('inc/functions.php');

echo siteHead('Informations personnelles', $description, 'default pi');
?>

<body class="account personnal_informations">
    <?php include('inc/header.php'); ?>
    <div class="headline">
        <span class="headline__content">Informations personnelles</span>
    </div>
    <section class="page">
        <header class="page__header">
            <div class="page__header--content">
                <div class="page__header--logo">
                    <img src="img/user/personnal_informations-grey.png" alt="Informations Personnelles">
                    <h1 class="page__title">Informations personnelles</h1>
                </div>
            </div>
        </header>
        <?php include('inc/sidebar.php'); ?>
        <div class="page__content">
            <div class="page-user">
                <form name="user_personnal_informations" method="post" action="">
                    <div id="user_personnal_informations">
                        <div>
                            <label for="user_personnal_informations_username" class="required">Pseudo</label>
                            <input type="text" id="user_personnal_informations_username" name="user_personnal_informations[username]" required="required" value="" placeholder="pseudo"/>
                        </div> <!-- UserName-->
                        <div>
                            <label for="user_personnal_informations_prenom" class="required">Prénom</label>
                            <input type="text" id="user_personnal_informations_prenom" name="user_personnal_informations[prenom]" required="required" value="" placeholder="Prénom"/>
                        </div> <!-- Name -->
                        <div>
                            <label for="user_personnal_informations_mail" class="required">Mail</label>
                            <input type="email" id="user_personnal_informations_mail" name="user_personnal_informations[mail]" required="required" value="" placeholder="Adresse email"/>
                        </div> <!-- EMail -->
                        <div>
                            <label class="required">Date de naissance</label>
                            <div id="user_personnal_informations_dateNaissance" class="birthday_container">
                                <div class="select_wrapper">
                                    <select id="user_personnal_informations_dateNaissance_day" name="user_personnal_informations[dateNaissance][day]">
                                        <option value="1"  selected="selected">1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>
                                        <option value="6" >6</option>
                                        <option value="7" >7</option>
                                        <option value="8" >8</option>
                                        <option value="9" >9</option>
                                        <option value="10" >10</option>
                                        <option value="11" >11</option>
                                        <option value="12" >12</option>
                                        <option value="13" >13</option>
                                        <option value="14" >14</option>
                                        <option value="15" >15</option>
                                        <option value="16" >16</option>
                                        <option value="17" >17</option>
                                        <option value="18" >18</option>
                                        <option value="19" >19</option>
                                        <option value="20" >20</option>
                                        <option value="21" >21</option>
                                        <option value="22" >22</option>
                                        <option value="23" >23</option>
                                        <option value="24" >24</option>
                                        <option value="25" >25</option>
                                        <option value="26" >26</option>
                                        <option value="27" >27</option>
                                        <option value="28" >28</option>
                                        <option value="29" >29</option>
                                        <option value="30" >30</option>
                                        <option value="31" >31</option>
                                    </select>
                                    <span class="arrow"></span>
                                </div>
                                <div class="select_wrapper">
                                    <select id="user_personnal_informations_dateNaissance_month" name="user_personnal_informations[dateNaissance][month]">
                                        <option value="1"  selected="selected">janv.</option>
                                        <option value="2" >févr.</option>
                                        <option value="3" >mars.</option>
                                        <option value="4" >avr.</option>
                                        <option value="5" >mai</option>
                                        <option value="6" >juin</option>
                                        <option value="7" >juil.</option>
                                        <option value="8" >août</option>
                                        <option value="9" >sept.</option>
                                        <option value="10" >oct.</option>
                                        <option value="11" >nov.</option>
                                        <option value="12" >déc.</option>
                                    </select>
                                    <span class="arrow"></span>
                                </div>
                                <div class="select_wrapper">
                                    <select id="user_personnal_informations_dateNaissance_year" name="user_personnal_informations[dateNaissance][year]">
                                        <option value="1896" >1896</option>
                                        <option value="1897" >1897</option>
                                        <option value="1898" >1898</option>
                                        <option value="1899" >1899</option>
                                        <option value="1900" >1900</option>
                                        <option value="1901" >1901</option>
                                        <option value="1902" >1902</option>
                                        <option value="1903" >1903</option>
                                        <option value="1904" >1904</option>
                                        <option value="1905" >1905</option>
                                        <option value="1906" >1906</option>
                                        <option value="1907" >1907</option>
                                        <option value="1908" >1908</option>
                                        <option value="1909" >1909</option>
                                        <option value="1910" >1910</option>
                                        <option value="1911" >1911</option>
                                        <option value="1912" >1912</option>
                                        <option value="1913" >1913</option>
                                        <option value="1914" >1914</option>
                                        <option value="1915" >1915</option>
                                        <option value="1916" >1916</option>
                                        <option value="1917" >1917</option>
                                        <option value="1918" >1918</option>
                                        <option value="1919" >1919</option>
                                        <option value="1920" >1920</option>
                                        <option value="1921" >1921</option>
                                        <option value="1922" >1922</option>
                                        <option value="1923" >1923</option>
                                        <option value="1924" >1924</option>
                                        <option value="1925" >1925</option>
                                        <option value="1926" >1926</option>
                                        <option value="1927" >1927</option>
                                        <option value="1928" >1928</option>
                                        <option value="1929" >1929</option>
                                        <option value="1930" >1930</option>
                                        <option value="1931" >1931</option>
                                        <option value="1932" >1932</option>
                                        <option value="1933" >1933</option>
                                        <option value="1934" >1934</option>
                                        <option value="1935" >1935</option>
                                        <option value="1936" >1936</option>
                                        <option value="1937" >1937</option>
                                        <option value="1938" >1938</option>
                                        <option value="1939" >1939</option>
                                        <option value="1940" >1940</option>
                                        <option value="1941" >1941</option>
                                        <option value="1942" >1942</option>
                                        <option value="1943" >1943</option>
                                        <option value="1944" >1944</option>
                                        <option value="1945" >1945</option>
                                        <option value="1946" >1946</option>
                                        <option value="1947" >1947</option>
                                        <option value="1948" >1948</option>
                                        <option value="1949" >1949</option>
                                        <option value="1950" >1950</option>
                                        <option value="1951" >1951</option>
                                        <option value="1952" >1952</option>
                                        <option value="1953" >1953</option>
                                        <option value="1954" >1954</option>
                                        <option value="1955" >1955</option>
                                        <option value="1956" >1956</option>
                                        <option value="1957" >1957</option>
                                        <option value="1958" >1958</option>
                                        <option value="1959" >1959</option>
                                        <option value="1960" >1960</option>
                                        <option value="1961" >1961</option>
                                        <option value="1962" >1962</option>
                                        <option value="1963" >1963</option>
                                        <option value="1964" >1964</option>
                                        <option value="1965" >1965</option>
                                        <option value="1966" >1966</option>
                                        <option value="1967" >1967</option>
                                        <option value="1968" >1968</option>
                                        <option value="1969" >1969</option>
                                        <option value="1970" >1970</option>
                                        <option value="1971" >1971</option>
                                        <option value="1972" >1972</option>
                                        <option value="1973" >1973</option>
                                        <option value="1974" >1974</option>
                                        <option value="1975" >1975</option>
                                        <option value="1976" >1976</option>
                                        <option value="1977" >1977</option>
                                        <option value="1978" >1978</option>
                                        <option value="1979" >1979</option>
                                        <option value="1980" >1980</option>
                                        <option value="1981" >1981</option>
                                        <option value="1982" >1982</option>
                                        <option value="1983" >1983</option>
                                        <option value="1984" >1984</option>
                                        <option value="1985" >1985</option>
                                        <option value="1986" >1986</option>
                                        <option value="1987" >1987</option>
                                        <option value="1988" >1988</option>
                                        <option value="1989" >1989</option>
                                        <option value="1990" >1990</option>
                                        <option value="1991" >1991</option>
                                        <option value="1992" >1992</option>
                                        <option value="1993" >1993</option>
                                        <option value="1994" >1994</option>
                                        <option value="1995"  selected="selected">1995</option>
                                        <option value="1996" >1996</option>
                                        <option value="1997" >1997</option>
                                        <option value="1998" >1998</option>
                                        <option value="1999" >1999</option>
                                        <option value="2000" >2000</option>
                                        <option value="2001" >2001</option>
                                        <option value="2002" >2002</option>
                                        <option value="2003" >2003</option>
                                        <option value="2004" >2004</option>
                                        <option value="2005" >2005</option>
                                        <option value="2006" >2006</option>
                                        <option value="2007" >2007</option>
                                        <option value="2008" >2008</option>
                                        <option value="2009" >2009</option>
                                        <option value="2010" >2010</option>
                                        <option value="2011" >2011</option>
                                        <option value="2012" >2012</option>
                                        <option value="2013" >2013</option>
                                        <option value="2014" >2014</option>
                                        <option value="2015" >2015</option>
                                        <option value="2016" >2016</option>
                                    </select>
                                    <span class="arrow"></span>
                                </div>
                            </div>
                        </div> <!-- BirthDay -->
                        <div>
                            <label for="user_personnal_informations_genre" class="required">Sexe</label>
                            <div class="select_wrapper">
                                <select id="user_personnal_informations_genre" name="user_personnal_informations[genre]">
                                    <option value="M"  selected="selected">Homme</option>
                                    <option value="F" >Femme</option>
                                </select>
                                <span class="arrow"></span>
                            </div>
                        </div> <!-- Gender -->
                        <div>
                            <h4>Vos adresses <button type="button" class="add_element button">+</button></h4>
                            <div id="user_personnal_informations_adresses" data-prototype="
                                 <div>
                                 <label class='address_title required'>__name__label__</label>
                                 <div>
                                 <label for='user_personnal_informations_adresses___name___voie' class='required'>Adresse</label>
                                 <input type='text' id='user_personnal_informations_adresses___name___voie' name='user_personnal_informations[adresses][__name__][voie]' required='required' />
                                 </div>
                                 <div>
                                 <label for='user_personnal_informations_adresses___name___complement'>Complément d&amp;#039;adresse</label>
                                 <input type='text' id='user_personnal_informations_adresses___name___complement' name='user_personnal_informations[adresses][__name__][complement]' />
                                 </div>
                                 <div class='row'>
                                 <div class='small-6 columns'>
                                 <div>
                                 <label for='user_personnal_informations_adresses___name___codepostal' class='required'>Code postal</label>
                                 <input type='text' id='user_personnal_informations_adresses___name___codepostal' name='user_personnal_informations[adresses][__name__][codepostal]' required='required' />
                                 </div>
                                 </div>
                                 <div class='small-6 columns'>
                                 <div>
                                 <label for='user_personnal_informations_adresses___name___ville' class='required'>Ville</label>
                                 <input type='text' id='user_personnal_informations_adresses___name___ville' name='user_personnal_informations[adresses][__name__][ville]' required='required' />
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 ">
                            </div>
                        </div> <!-- Adresse -->

                        <div>
                            <button type="submit" class="button" id="user_personnal_informations_save" name="user_personnal_informations[save]">Enregistrer</button>
                        </div> <!-- Submit -->
                        <input type="hidden" id="user_personnal_informations__token" name="user_personnal_informations[_token]" value="sSbvPnCKSvIuE3uADFbmhfcXMlCSGnol6WuK3axPQoI" />
                    </div>
                </form>
            </div>
            <?php include './inc/page-menu.php'; ?>

        </div>
    </section>
    <?php include('inc/footer.php'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/tarot.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            var dynamicForm = new DynamicForm({
                container_id: 'user_personnal_informations_adresses',
                remove_element_content: '-',
                append_add_button: false,
                append_label_index: false,
                translation: {
                    element_num: 'Adresse'
                }
            });
            $('.account.personnal_informations form button.add_element').on('click', function () {
                dynamicForm.add();
            });
        });
    </script>
</body>
