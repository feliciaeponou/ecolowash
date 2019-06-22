<?php
include ("header.php");
session_start();
?>
<div class="container-fluid h-100">
		<div class="row justify-content-center alig-items-center h-100" style="padding-top: 100px;" >
			<div class="col col-sm-6 col-md-6 col-lg-4 col-xm-3">
				<div class="card">
					<div class="card-header" align="center">
						<strong><h3>Inscrivez-vous</h3></strong>
					</div>
					<div class="card-body">
						<div id="obligatoire">* Champs Obligatoires</div>
	                    						<form action="verif" method="POST">
							<div class="form-group">
								<input required type="text" class="form-control" name="nom" placeholder="Entrer votre nom *" >
							</div>
							<div class="form-group">
								<input required type="text" class="form-control" name="prenom" placeholder="Entrer votre prénom *" >
							</div>
							<div class="form-group">
								<select required name="sexe" class="form-control">
	                                <option value="">Sexe *</option>
	                                <option value="M">Masculin</option>
	                                <option value="F">Feminin</option>
	                            </select>
							</div>
							<div class="form-group">
								<input required type="text" class="form-control" name="numero" placeholder="Entrer votre numéro de téléphone *" >
							</div>
							<div class="form-group">
								<input required type="email" class="form-control" name="email"  placeholder="Entrer votre email *" >
							</div>
							<div class="form-group">
								<input required type="password" class="form-control" name="password"  placeholder="Entrez votre mot de passe" >
							</div>
							<div class="form-group">
								<input required type="text" class="form-control" name="fonction"  placeholder="Que faites-vous dans la vie *" >
							</div>
							<div class="form-group">
								<select required name="pays" class="form-control">
	                                <option value="">Pays *</option>
	                                <option value="1">Afghanistan</option><option value="201">Afrique du Sud</option><option value="2">Albanie</option><option value="4">Algérie</option><option value="84">Allemagne</option><option value="6">Andorre</option><option value="7">Angola</option><option value="186">Anguilla</option><option value="3">Antarctique</option><option value="8">Antigua-et-Barbuda</option><option value="151">Antilles Néerlandaises</option><option value="192">Arabie Saoudite</option><option value="10">Argentine</option><option value="16">Arménie</option><option value="152">Aruba</option><option value="11">Australie</option><option value="12">Autriche</option><option value="9">Azerbaïdjan</option><option value="13">Bahamas</option><option value="14">Bahreïn</option><option value="15">Bangladesh</option><option value="17">Barbade</option><option value="34">Bélarus</option><option value="18">Belgique</option><option value="26">Belize</option><option value="59">Bénin</option><option value="19">Bermudes</option><option value="20">Bhoutan</option><option value="21">Bolivie</option><option value="22">Bosnie-Herzégovine</option><option value="23">Botswana</option><option value="25">Brésil</option><option value="30">Brunéi Darussalam</option><option value="31">Bulgarie</option><option value="233">Burkina Faso</option><option value="33">Burundi</option><option value="35">Cambodge</option><option value="36">Cameroun</option><option value="37">Canada</option><option value="38">Cap-vert</option><option value="43">Chili</option><option value="44">Chine</option><option value="57">Chypre</option><option value="48">Colombie</option><option value="49">Comores</option><option value="54">Costa Rica</option> selected="selected"<option selected="selected" value="110">Côte d'Ivoire</option><option value="55">Croatie</option><option value="56">Cuba</option><option value="60">Danemark</option><option value="79">Djibouti</option><option value="61">Dominique</option><option value="227">Égypte</option><option value="64">El Salvador</option><option value="218">Émirats Arabes Unis</option><option value="63">Équateur</option><option value="67">Érythrée</option><option value="203">Espagne</option><option value="68">Estonie</option><option value="164">États Fédérés de Micronésie</option><option value="231">États-Unis</option><option value="66">Éthiopie</option><option value="182">Fédération de Russie</option><option value="72">Fidji</option><option value="73">Finlande</option><option value="75">France</option><option value="80">Gabon</option><option value="82">Gambie</option><option value="81">Géorgie</option><option value="71">Géorgie du Sud et les Îles Sandwich du Sud</option><option value="85">Ghana</option><option value="86">Gibraltar</option><option value="88">Grèce</option><option value="90">Grenade</option><option value="89">Groenland</option><option value="91">Guadeloupe</option><option value="92">Guam</option><option value="93">Guatemala</option><option value="94">Guinée</option><option value="65">Guinée Équatoriale</option><option value="176">Guinée-Bissau</option><option value="95">Guyana</option><option value="76">Guyane Française</option><option value="96">Haïti</option><option value="99">Honduras</option><option value="100">Hong-Kong</option><option value="101">Hongrie</option><option value="24">Île Bouvet</option><option value="46">Île Christmas</option><option value="229">Île de Man</option><option value="160">Île Norfolk</option><option value="70">Îles (malvinas) Falkland</option><option value="39">Îles Caïmanes</option><option value="47">Îles Cocos (Keeling)</option><option value="53">Îles Cook</option><option value="69">Îles Féroé</option><option value="97">Îles Heard et Mcdonald</option><option value="162">Îles Mariannes du Nord</option><option value="165">Îles Marshall</option><option value="163">Îles Mineures Éloignées des États-Unis</option><option value="28">Îles Salomon</option><option value="222">Îles Turks et Caïques</option><option value="29">Îles Vierges Britanniques</option><option value="232">Îles Vierges des États-Unis</option><option value="74">Îles Åland</option><option value="103">Inde</option><option value="104">Indonésie</option><option value="106">Iraq</option><option value="107">Irlande</option><option value="102">Islande</option><option value="108">Israël</option><option value="109">Italie</option><option value="125">Jamahiriya Arabe Libyenne</option><option value="111">Jamaïque</option><option value="112">Japon</option><option value="114">Jordanie</option><option value="113">Kazakhstan</option><option value="115">Kenya</option><option value="119">Kirghizistan</option><option value="87">Kiribati</option><option value="118">Koweït</option><option value="226">L'ex-République Yougoslave de Macédoine</option><option value="122">Lesotho</option><option value="123">Lettonie</option><option value="121">Liban</option><option value="124">Libéria</option><option value="126">Liechtenstein</option><option value="127">Lituanie</option><option value="128">Luxembourg</option><option value="129">Macao</option><option value="130">Madagascar</option><option value="132">Malaisie</option><option value="131">Malawi</option><option value="133">Maldives</option><option value="134">Mali</option><option value="135">Malte</option><option value="144">Maroc</option><option value="136">Martinique</option><option value="138">Maurice</option><option value="137">Mauritanie</option><option value="50">Mayotte</option><option value="139">Mexique</option><option value="140">Monaco</option><option value="141">Mongolie</option><option value="143">Montserrat</option><option value="145">Mozambique</option><option value="32">Myanmar</option><option value="147">Namibie</option><option value="148">Nauru</option><option value="149">Népal</option><option value="156">Nicaragua</option><option value="157">Niger</option><option value="158">Nigéria</option><option value="159">Niué</option><option value="161">Norvège</option><option value="153">Nouvelle-Calédonie</option><option value="155">Nouvelle-Zélande</option><option value="146">Oman</option><option value="224">Ouganda</option><option value="235">Ouzbékistan</option><option value="167">Pakistan</option><option value="166">Palaos</option><option value="168">Panama</option><option value="169">Papouasie-Nouvelle-Guinée</option><option value="170">Paraguay</option><option value="150">Pays-Bas</option><option value="171">Pérou</option><option value="172">Philippines</option><option value="173">Pitcairn</option><option value="174">Pologne</option><option value="77">Polynésie Française</option><option value="178">Porto Rico</option><option value="175">Portugal</option><option value="179">Qatar</option><option value="211">République Arabe Syrienne</option><option value="40">République Centrafricaine</option><option value="117">République de Corée</option><option value="142">République de Moldova</option><option value="52">République Démocratique du Congo</option><option value="120">République Démocratique Populaire Lao</option><option value="62">République Dominicaine</option><option value="51">République du Congo</option><option value="105">République Islamique d'Iran</option><option value="116">République Populaire Démocratique de Corée</option><option value="58">République Tchèque</option><option value="230">République-Unie de Tanzanie</option><option value="180">Réunion</option><option value="181">Roumanie</option><option value="228">Royaume-Uni</option><option value="183">Rwanda</option><option value="204">Sahara Occidental</option><option value="185">Saint-Kitts-et-Nevis</option><option value="190">Saint-Marin</option><option value="188">Saint-Pierre-et-Miquelon</option><option value="98">Saint-Siège (état de la Cité du Vatican)</option><option value="189">Saint-Vincent-et-les Grenadines</option><option value="184">Sainte-Hélène</option><option value="187">Sainte-Lucie</option><option value="238">Samoa</option><option value="5">Samoa Américaines</option><option value="191">Sao Tomé-et-Principe</option><option value="193">Sénégal</option><option value="240">Serbie-et-Monténégro</option><option value="194">Seychelles</option><option value="195">Sierra Leone</option><option value="196">Singapour</option><option value="197">Slovaquie</option><option value="199">Slovénie</option><option value="200">Somalie</option><option value="205">Soudan</option><option value="41">Sri Lanka</option><option value="209">Suède</option><option value="210">Suisse</option><option value="206">Suriname</option><option value="207">Svalbard etÎle Jan Mayen</option><option value="208">Swaziland</option><option value="212">Tadjikistan</option><option value="45">Taïwan</option><option value="42">Tchad</option><option value="78">Terres Australes Françaises</option><option value="27">Territoire Britannique de l'Océan Indien</option><option value="83">Territoire Palestinien Occupé</option><option value="213">Thaïlande</option><option value="177">Timor-Leste</option><option value="214">Togo</option><option value="215">Tokelau</option><option value="216">Tonga</option><option value="217">Trinité-et-Tobago</option><option value="219">Tunisie</option><option value="221">Turkménistan</option><option value="220">Turquie</option><option value="223">Tuvalu</option><option value="225">Ukraine</option><option value="234">Uruguay</option><option value="154">Vanuatu</option><option value="236">Venezuela</option><option value="198">Viet Nam</option><option value="237">Wallis et Futuna</option><option value="239">Yémen</option><option value="241">Zambie</option><option value="202">Zimbabwe</option>	                            </select>
							</div>
							<div class="form-group">
								<input required type="text" class="form-control" name="ville"  placeholder="Adresse/ville" >
							</div>
							<div class="btn-group" align="center">
								<button type="submit" name="inscription" class="btn btn-primary"><i class="fa fa-paper-plane"></i> S'inscrire</button>
								<a href="../index.html" class="btn btn-danger">Retour</a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
<?php
include ("footer.php");
?>