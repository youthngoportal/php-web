<?php
$page_title = "Register - Youth NGO portal";
?>
<!DOCTYPE html>
<html lang="en" ng-app="ngoapp">

<?php
require_once('templates/head.php');
?>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navmain">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span style="color: #F96900;">Youth</span> <span style="color: white;">NGO</span><span style="color: green;"> Portal</span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li><a href="ngos.php">NGO'S</a>
                    </li>
                    <li class="active"><a href="register.php">Registration Process</a>
                    <li><a href="add.php">Add NGO</a></li>
                    <li><a href="shareyourexp/">Share you exp.</a></li>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

   <div id="bluer">
        
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h4>Registration Process</h4>
                    <p>A brief guide on NGO registration process in India.</p>
                </div>
            </div>
    </div>

    <div class="container register">
        <div class="row">
	        	<nav class="col-xs-3 bs-docs-sidebar">
			            <ul id="sidebar" class="nav nav-stacked fixed">
						    <li>
						        <a href="#GroupA">NGO</a>
						        <ul class="nav nav-stacked">
						            <li><a href="#GroupASub1">Defination</a></li>
						            <li><a href="#GroupASub2">Size</a></li>
						            <li><a href="#GroupASub3">Geographic Scope</a></li>
						            <li><a href="#GroupASub4">Thematic Scope</a></li>
						            <li><a href="#GroupASub5">Incorporation/ Registration</a></li>	
						        </ul>
						    </li>
						    <!-- Same for Group B & C -->
						    <li>
				                <a href="#GroupB">Types</a>
				                <ul class="nav nav-stacked">
				                    <li><a href="#GroupBSub1">Trust</a></li>
				                    <li><a href="#GroupBSub2">Society</a></li>
				                    <li><a href="#GroupBSub3">Section 25 Company</a></li>
				                </ul>
				            </li>
				            <li>
				                <a href="#GroupC">Register</a>
				                <ul class="nav nav-stacked">
				                    <li><a href="#GroupCSub1">Trust</a></li>
				                    <li><a href="#GroupCSub2">Society</a></li>
				                    <li><a href="#GroupCSub3">Section 25 Company</a></li>
				                </ul>
				            </li>
				            <li>
				                <a href="#GroupD">Useful links</a>
				                <!-- <ul class="nav nav-stacked">
				                    <li><a href="#GroupDSub1">Trust</a></li>
				                </ul> -->
				            </li>
						</ul>
			    </nav>
	        	<div class="col-xs-9">
		        	<section id="GroupA" class="group">
					    <h3>What is NGO?</h3>
					    <div id="GroupASub1" class="subgroup">
					        <h4>Defination</h4>
					        <p>
						    	<i>NGO</i>, or <i>Non-Governmental Organization</i>, is an organization that exists independently from government and is setup by ordinary citizens, foundations, businesses, or private persons. NGO is not a part of government but it is directly controlled and monitored by Government, ngo’s works according to the policies of the Government more specifically for development and welfare of society, areas and communities as Governments use to work.
						    	<br><br>
						    	NGOs rely primarily on charitable contributions, support of Government, public funding, support agencies, support communities, and help of business groups and people. NGO as a charitable and religious associations manages private funds for development, distribution of food, clothes, medicines, equipments, facilities and tools to needy persons and communities. If, due to a bad economy, donations, grants, and public sector subsidies dried up, they may even have to shut down.
						    	<br><br>
						    	In India NGO’s can categorized into different types based on their size, geographic scope, thematic scope, and type of incorporation.
					    	</p>
					    </div>
					    <div id="GroupASub2" class="subgroup">
					        <h4>Size</h4>
					        <p>
					        	These NGO’s are categorized by the reach and resources they have. It can be classified as:
					        	<br><i class="fa fa-star-o"></i>Large organizations.
					        	<br><i class="fa fa-star-o"></i>Large full time paid staff.
					        	<br><i class="fa fa-star-o"></i>Multinational bodies.
					        	<br><i class="fa fa-star-o"></i>Branch offices in several countries.
					        	<br>
					        	Example: Red Cross, Sense international India, and Care India.
					        </p>
					    </div>
					    <div id="GroupASub3" class="subgroup">
					        <h4>Geographic Scope</h4>
					        <p>
					        	These NGO’s are focused on both global and local issues.  <br> 
					        	Example: Awaaj and LEPRA Society.
					        </p>
					    </div>
					    <div id="GroupASub4" class="subgroup">
					        <h4>Thematic Scope</h4>
					        <p>
					        	This type of NGO’s focus on major issues faced by citizens. These are classified as:
					        	<br><i class="fa fa-star-o"></i>Primarily concerned with environment, human rights, social issues, and other.
					        	<br><i class="fa fa-star-o"></i>Could be concerned with education, Emergency relief and Reactive priorities, or emergency prevention and proactive priorities.
					        	<br><i class="fa fa-star-o"></i>Could focus on single or broader, multi-issue portfolio.
					        	<br>
					        	Example: Deepalaya, HelpAge India, and Akshaya Trust.
					        </p>
					    </div>
					    <div id="GroupASub5" class="subgroup">
					        <h4>Incorporation/ Registration</h4>
					        <p>
					        	Based on Incorporation/Registration a NGO may be classified as a Trust, Society or Section 25 company in India. Registration under different acts mean that different provisions and benefits will apply to the various organizations.
					        </p>
					    </div>
					</section>
					<section id="GroupB" class="group">
					    <h3>Types of NGO</h3>
					    <p>
					    	Not-for-profit organizations (NPOs) in India generally take three legal forms: trusts, societies, and limited (Section 8) companies. 
					    </p>
					    <div id="GroupBSub1" class="subgroup">
					        <h4>Trust</h4>
					        <p>
					        	A public charitable trust is usually built when there is property involved, especially in terms of land and building. The main instrument in any trust registration is trust deed stating the aim and object of trust. The Trust may be registered under the Indian Trusts Act, 1982.
					        </p>
					    </div>
					    <div id="GroupBSub2" class="subgroup">
					        <h4>Society</h4>
					        <p>
					        	Societies are membership organizations that may be registered for charitable purposes. They are usually managed by a governing council or a managing committee and are regulated by the Societies Registration Act which has been adopted by various states. Unlike trusts, societies may be dissolved.
					        </p>
					    </div>
					    <div id="GroupBSub3" class="subgroup">
					        <h4>Section 25 Company</h4>
					        <p>
					        	Any company established ‘for promoting commerce, art, science, religion, charity or any other useful object’, provided the profits, if any, or other income is applied for promoting only the objects of the company and no dividend is paid to its members. This is governed by non-profit laws of India.
					        </p>
					    </div>
					</section>
					<section id="GroupC" class="group">
					    <h3>Registration Process</h3>
					    <p>
					    	In India NGOs can be registered as trusts, societies, or a private limited nonprofit company, under section-25 companies. 
					    </p>
					    <div id="GroupCSub1" class="subgroup">
					        <h4>Trust</h4>
					        <p>
					        	A public charitable trust must register with the office of the Charity Commissioner having jurisdiction over the trust (generally the Charity Commissioner of the state in which the trustees register the trust) in order to be eligible to apply for tax-exemption.
					        	<br><br>In general, trusts may register for one or more of the following purposes: 
					        	<br><i class="fa fa-star-o"></i>Relief of poverty or distress.
					        	<br><i class="fa fa-star-o"></i>Education.
					        	<br><i class="fa fa-star-o"></i>Medical relief.
					        	<br><i class="fa fa-star-o"></i>Provision of facilities for recreation or other leisure-time occupations, if the facilities are provided in the interest of social welfare and public benefit, and
					        	<br><i class="fa fa-star-o"></i>The advancement of any other object of general public utility, excluding purposes which relate exclusively to religious teaching or worship.
					        	<br>
					        	<br>
					        	A trust may have a single or sole trustee, however at least three trustees are required to register a public charitable trust.
					        </p>
					    </div>
					    <div id="GroupCSub2" class="subgroup">
					        <h4>Society</h4>
					        <p>
					        		Societies are similar in character to trusts, although there are a few essential differences, including that a minimum of seven ‘members’ are required to form a society. The members must register the society with the relevant state Registrar of Societies in order to be eligible for tax-exempt status.
					        		<br><br>According to section 20 of the Act, the types of societies that may be registered under the Act include, but are not limited to, the following:
						        	<br><i class="fa fa-star-o"></i>Charitable societies.
						        	<br><i class="fa fa-star-o"></i>Societies established for the promotion of science, literature, education, or the fine arts, and
						        	<br><i class="fa fa-star-o"></i>Public art museums and galleries, and certain other types of museums.
						        	<br>
						        	<br>
						        		Societies, unlike trusts, must annually file a list of the names, addresses and occupations of their managing committee members with the Registrar of Societies. Furthermore, in a society all property is held in the name of the society, whereas all of the property of a trust legally vests in the trustees.
					    </div>
					    <div id="GroupCSub3" class="subgroup">
					        <h4>Section 25 Company</h4>
					        <p>
					        	The Indian Companies Act (2013) which principally governs for-profit entities, permits certain companies to obtain not-for-profit status as "Section 8 companies." <br>A Section 8 company may be formed for the purpose of commerce, art, science, sports, education, research, social welfare, religion, charity, protection of the environment, or any such other purpose. <br>A Section 8 company must apply its profits, if any, or other income to the promotion of its objects, and should not pay any dividend to its members.
					        	<br>
					        	<br>
					        	At least two individuals are required to form a Section8 company. The founders or promoters of a Section 8 company must submit application materials to the Registrar of Companies.<br> The application must include copies of the memorandum and articles of association of the proposed company, as well as a number of other documents, including a statement of assets and a brief description of the work proposed to be done upon registration.
					        </p>
					    </div>
					</section>
					<section id="GroupD" class="group">
					    <h3>Links</h3>
					    <p>Register your NGO using web application
					    <a target="_blank" href="http://ngo.india.gov.in/auth/default.php">Online registration form &nbsp<i class="fa fa-external-link"></i></a></p>
					    <p>NGO directory
					    <a target="_blank" href="http://ngo.india.gov.in/ngo_stateschemes_ngo.php">Online registration form &nbsp<i class="fa fa-external-link"></i></a></p>
					</section>
				</div>	
        </div>
        </div>
    </div>
    <!-- container -->

    <?php
	require_once('templates/footer.php');
	?>
    

  </body>
</html>
