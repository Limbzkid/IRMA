<?php

/* themes/basic/templates/page--register.html.twig */
class __TwigTemplate_a91c9a1d7bad7f3a38ebe5d0adf49e2b9bd7864f2708a36585897894a54a84fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 1, "for" => 162, "if" => 371);
        $filters = array("date" => 1, "render" => 371);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
                array('date', 'render'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["curYr"] = twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y");
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
<section class=\"innerbanner\">
  ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
        echo "
</section>
<div id=\"main\">
  <section class=\"mainWrapper formPage\">
    <div class=\"container\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
      <h3>Create an Account</h3>
          
      
      <div id=\"content-header\" class=\"innerContainer\">
        <label>Select a User Type</label>
       <div class=\"customSelect selectUser\">
            <div class=\"dropdownWrap\">
              <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
              <select class=\"selType\">
                <option value=\"0\" selected>Select</option>
                <option value=\"1\">Alumni</option>
                <option value=\"2\">Faculty</option>
                <option value=\"3\">Student</option>
              </select>
            </div>
        </div>
        <div class=\"formFealds creareAccForm\">
          <ul>
            <li class=\"usrProfImg dnone\">
                <hr>
              <!--<div class=\"uploadBtn\">
                <form id=\"uploadFrm\" action=\"/ajax/image-upload\" method=\"post\">
                  <a class=\"\" href=\"javascript:;\">Upload Image.</a>
                  
                  
                </form>
              </div>-->
                <ul class=\"ragisterPImgUp\">
                    <li class=\"profileImg\" id=\"user-99\">
                      <form id=\"uploadFrm\" action=\"/ajax/image-upload\" method=\"post\">
                        <div class=\"imgProfile\">
                          <input name=\"file\" type=\"file\" class=\"inputFile\" />
                        </div>
                        <div class=\"buttonSec\">
                            <input type=\"submit\" value=\"Add a Profile Image\" class=\"btnSubmit profImf\"/>
                        </div>
                        <p class=\"imgMsg\">Please upload your image having resolution 290px X 200px</p>
                      </form>
                    </li>
                </ul>
                
                
            </li>
          </ul>
          
          <form id=\"alumniFrm\" autocomplete=\"off\" class=\"dnone regFrm\" action=\"\">
            <ul>
              <li>
                    <label>Email Id <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"emailId\" id=\"emailId\" maxlength=\"100\">
              </li>
              <li>
                    <label>First Name <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"firstName\" id=\"firstName\" maxlength=\"25\">
              </li>
              <li>
                    <label>Last Name <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"lastName\" id=\"lastName\" maxlength=\"25\">
              </li>   
              <li>
                <label>Gender <span class=\"required\">*</span></label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box1\" value=\"Male\" checked=\"checked\"><label for=\"box1\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box2\" value=\"Female\"><label for=\"box2\"><span></span> Female</label></div>
                </div>
              </li>
              <li class='clear'>
                    <label>Date of Birth</label>
                    <input type=\"text\" class=\"dobReg\" id=\"dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              
              <li>
                    <label>Address 1</label>
                    <input type=\"text\" class=\"addr1\" id=\"addr1\" maxlength=\"10o\">
              </li>
              <li>
                    <label>Address 2</label>
                    <input type=\"text\" class=\"addr2\" id=\"addr2\" maxlength=\"10o\">
              </li>
              <li>
                    <label>Address 3</label>
                    <input type=\"text\" class=\"addr3\" id=\"addr3\" maxlength=\"10o\">
              </li>
              <li>
                  <label>Country</label>
                <div class=\"customSelect cntryErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">India</a>
                    <select id=\"countryCode\" class=\"countryCode countries\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <label>State</label>
                <div class=\"customSelect stErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"indState\" class=\"states\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <label>City</label>
                <div class=\"customSelect cityErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"indCities\" class=\"cities\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Mobile Number<span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"cCode\" class=\"telCode\">
                  <input type=\"tel\" id=\"mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Course Type <span class=\"required\">*</span></label>
                <div class=\"customSelect crseErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"courseType\" class=\"courseType\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class=\"dnone\">
                  <label>Course Name</label>
                <input type=\"text\" class=\"course\" id=\"course\" maxlength=\"50\">
              </li>
              <li>
                  <label>Joining Year <span class=\"required\">*</span></label>
                <div class=\"customSelect joinErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"joinYear\" class=\"joinYear\">
                      <option value=\"\">Select</option>
                      ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1979, (isset($context["curYr"]) ? $context["curYr"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 163
            echo "                        <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Graduating Year <span class=\"required\">*</span></label>
                <div class=\"customSelect gradErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"gradYear\" class=\"gradYear\">
                      <option value=\"\">Select</option>
                      ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1979, (isset($context["curYr"]) ? $context["curYr"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 177
            echo "                        <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Batch Number <span class=\"required\">*</span></label>
                <div class=\"customSelect batchErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select class=\"batch\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>

              <li>
                  <label>IRMA Roll Number</label>
                <input type=\"text\" class=\"rollNo\" id=\"rollNo\" maxlength=\"50\">
              </li>
              <li class=\"clear\"><input class=\"button alumniReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
             
          
          <form id=\"facultyFrm\" autocomplete=\"off\" class=\"dnone regFrm\">
            <ul>
              <li>
                  <label>Email Id <span class=\"required\">*</span></label>
                <input type=\"text\" id=\"f_emailId\" class=\"emailId\" maxlength=\"100\">
              </li>
              <li>
                    <label>First Name <span class=\"required\">*</span></label>
                    <input type=\"text\" id=\"f_firstName\" class=\"firstName\" maxlength=\"25\">
              </li>
              <li>
                  <label>Last Name <span class=\"required\">*</span></label>
                <input type=\"text\" id=\"f_lastName\" class=\"lastName\" maxlength=\"25\">
              </li>   
              <li>
                  <label>Gender</label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box4\" value=\"male\" checked=\"checked\"><label for=\"box4\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box5\" value=\"female\"><label for=\"box5\"><span></span> Female</label></div>
                </div>
              </li>
              <li class=\"clear\">
                  <label>Date of Birth</label>
                <input type=\"text\" class=\"dobReg\" id=\"f_dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              
              <li>
                  <label>Mobile Number<span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"f_cCode\">
                  <input type=\"tel\" class=\"mobNo\" id=\"f_mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Area Group <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"areaGrp\" class=\"areaGrp\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Subject Group <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"subGrp\" class=\"subGrp\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Number of years as Faculty at IMRA <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"expFactGrp\" id=\"expFactGrp\" maxlength=\"3\">
              </li>
              <li class=\"clear\"><input class=\"button facultyReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
          
          <form id=\"studentFrm\" autocomplete=\"off\" class=\"dnone regFrm\">
            <ul>
              <li>
                  <label>Email Id <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"emailId\" id=\"s_emailId\" maxlength=\"100\">
              </li>
              <li>
                  <label>First Name <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"firstName\" id=\"s_firstName\" maxlength=\"25\">
              </li>
              <li>
                  <label>Last Name <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"lastName\" id=\"s_lastName\" maxlength=\"25\">
              </li>   
              <li>
                <label>Gender <span class=\"required\">*</span></label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box15\" value=\"male\" checked=\"checked\"><label for=\"box15\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box6\" value=\"female\"><label for=\"box6\"><span></span> Female</label></div>
                </div>
              </li>
              <li class=\"clear\">
                  <label>Date of Birth</label>
                <input type=\"text\" class=\"dobReg\" id=\"s_dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Mobile Number <span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"s_cCode\">
                  <input type=\"tel\" class=\"mobNo\" id=\"s_mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Course Type <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap crseErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_courseType\" class=\"courseType\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class=\"dnone\">
                  <label>Course Name</label>
                <input type=\"text\" class=\"course\" id=\"s_course\" maxlength=\"50\">
              </li>
              <li>
                  <label>Joining Year <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap joinErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_joinYear\" class=\"joinYear\">
                      <option value=\"\">Select</option>
                      ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1979, (isset($context["curYr"]) ? $context["curYr"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 338
            echo "                        <option value=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "\"> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["i"], "html", null, true));
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 340
        echo "                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Batch Number <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap batchErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_batch\" class=\"batch\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>

              <li>
                  <label>IRMA Roll Number</label>
                <input type=\"text\" class=\"rollNo\" id=\"s_rollNo\" maxlength=\"50\">
              </li>
              <li class=\"clear\"><input class=\"button stdtReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
          <input type=\"hidden\" id=\"tokenfid\" value=\"\">
          ";
        // line 364
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          
        </div>
      </div><!-- /#content-header -->
    </div>
  </section>
</div>
";
        // line 371
        if ($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 372
            echo "  <footer><div class=\"container footer-container\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "</div></footer>
";
        }
        // line 374
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page--register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 374,  470 => 372,  468 => 371,  458 => 364,  432 => 340,  421 => 338,  417 => 337,  257 => 179,  246 => 177,  242 => 176,  229 => 165,  218 => 163,  214 => 162,  57 => 8,  50 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set curYr = now|date('Y') %}
{{ page.header }}
<section class=\"innerbanner\">
  {{ page.banner }}
</section>
<div id=\"main\">
  <section class=\"mainWrapper formPage\">
    <div class=\"container\">{{ page.help }}
      <h3>Create an Account</h3>
          
      
      <div id=\"content-header\" class=\"innerContainer\">
        <label>Select a User Type</label>
       <div class=\"customSelect selectUser\">
            <div class=\"dropdownWrap\">
              <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
              <select class=\"selType\">
                <option value=\"0\" selected>Select</option>
                <option value=\"1\">Alumni</option>
                <option value=\"2\">Faculty</option>
                <option value=\"3\">Student</option>
              </select>
            </div>
        </div>
        <div class=\"formFealds creareAccForm\">
          <ul>
            <li class=\"usrProfImg dnone\">
                <hr>
              <!--<div class=\"uploadBtn\">
                <form id=\"uploadFrm\" action=\"/ajax/image-upload\" method=\"post\">
                  <a class=\"\" href=\"javascript:;\">Upload Image.</a>
                  
                  
                </form>
              </div>-->
                <ul class=\"ragisterPImgUp\">
                    <li class=\"profileImg\" id=\"user-99\">
                      <form id=\"uploadFrm\" action=\"/ajax/image-upload\" method=\"post\">
                        <div class=\"imgProfile\">
                          <input name=\"file\" type=\"file\" class=\"inputFile\" />
                        </div>
                        <div class=\"buttonSec\">
                            <input type=\"submit\" value=\"Add a Profile Image\" class=\"btnSubmit profImf\"/>
                        </div>
                        <p class=\"imgMsg\">Please upload your image having resolution 290px X 200px</p>
                      </form>
                    </li>
                </ul>
                
                
            </li>
          </ul>
          
          <form id=\"alumniFrm\" autocomplete=\"off\" class=\"dnone regFrm\" action=\"\">
            <ul>
              <li>
                    <label>Email Id <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"emailId\" id=\"emailId\" maxlength=\"100\">
              </li>
              <li>
                    <label>First Name <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"firstName\" id=\"firstName\" maxlength=\"25\">
              </li>
              <li>
                    <label>Last Name <span class=\"required\">*</span></label>
                    <input type=\"text\" class=\"lastName\" id=\"lastName\" maxlength=\"25\">
              </li>   
              <li>
                <label>Gender <span class=\"required\">*</span></label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box1\" value=\"Male\" checked=\"checked\"><label for=\"box1\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box2\" value=\"Female\"><label for=\"box2\"><span></span> Female</label></div>
                </div>
              </li>
              <li class='clear'>
                    <label>Date of Birth</label>
                    <input type=\"text\" class=\"dobReg\" id=\"dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              
              <li>
                    <label>Address 1</label>
                    <input type=\"text\" class=\"addr1\" id=\"addr1\" maxlength=\"10o\">
              </li>
              <li>
                    <label>Address 2</label>
                    <input type=\"text\" class=\"addr2\" id=\"addr2\" maxlength=\"10o\">
              </li>
              <li>
                    <label>Address 3</label>
                    <input type=\"text\" class=\"addr3\" id=\"addr3\" maxlength=\"10o\">
              </li>
              <li>
                  <label>Country</label>
                <div class=\"customSelect cntryErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">India</a>
                    <select id=\"countryCode\" class=\"countryCode countries\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <label>State</label>
                <div class=\"customSelect stErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"indState\" class=\"states\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                <label>City</label>
                <div class=\"customSelect cityErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"indCities\" class=\"cities\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Mobile Number<span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"cCode\" class=\"telCode\">
                  <input type=\"tel\" id=\"mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Course Type <span class=\"required\">*</span></label>
                <div class=\"customSelect crseErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"courseType\" class=\"courseType\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class=\"dnone\">
                  <label>Course Name</label>
                <input type=\"text\" class=\"course\" id=\"course\" maxlength=\"50\">
              </li>
              <li>
                  <label>Joining Year <span class=\"required\">*</span></label>
                <div class=\"customSelect joinErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"joinYear\" class=\"joinYear\">
                      <option value=\"\">Select</option>
                      {% for i in 1979 .. curYr %}
                        <option value=\"{{ i }}\"> {{ i }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Graduating Year <span class=\"required\">*</span></label>
                <div class=\"customSelect gradErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"gradYear\" class=\"gradYear\">
                      <option value=\"\">Select</option>
                      {% for i in 1979 .. curYr %}
                        <option value=\"{{ i }}\"> {{ i }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Batch Number <span class=\"required\">*</span></label>
                <div class=\"customSelect batchErr\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select class=\"batch\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>

              <li>
                  <label>IRMA Roll Number</label>
                <input type=\"text\" class=\"rollNo\" id=\"rollNo\" maxlength=\"50\">
              </li>
              <li class=\"clear\"><input class=\"button alumniReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
             
          
          <form id=\"facultyFrm\" autocomplete=\"off\" class=\"dnone regFrm\">
            <ul>
              <li>
                  <label>Email Id <span class=\"required\">*</span></label>
                <input type=\"text\" id=\"f_emailId\" class=\"emailId\" maxlength=\"100\">
              </li>
              <li>
                    <label>First Name <span class=\"required\">*</span></label>
                    <input type=\"text\" id=\"f_firstName\" class=\"firstName\" maxlength=\"25\">
              </li>
              <li>
                  <label>Last Name <span class=\"required\">*</span></label>
                <input type=\"text\" id=\"f_lastName\" class=\"lastName\" maxlength=\"25\">
              </li>   
              <li>
                  <label>Gender</label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box4\" value=\"male\" checked=\"checked\"><label for=\"box4\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box5\" value=\"female\"><label for=\"box5\"><span></span> Female</label></div>
                </div>
              </li>
              <li class=\"clear\">
                  <label>Date of Birth</label>
                <input type=\"text\" class=\"dobReg\" id=\"f_dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              
              <li>
                  <label>Mobile Number<span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"f_cCode\">
                  <input type=\"tel\" class=\"mobNo\" id=\"f_mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Area Group <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"areaGrp\" class=\"areaGrp\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Subject Group <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"subGrp\" class=\"subGrp\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Number of years as Faculty at IMRA <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"expFactGrp\" id=\"expFactGrp\" maxlength=\"3\">
              </li>
              <li class=\"clear\"><input class=\"button facultyReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
          
          <form id=\"studentFrm\" autocomplete=\"off\" class=\"dnone regFrm\">
            <ul>
              <li>
                  <label>Email Id <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"emailId\" id=\"s_emailId\" maxlength=\"100\">
              </li>
              <li>
                  <label>First Name <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"firstName\" id=\"s_firstName\" maxlength=\"25\">
              </li>
              <li>
                  <label>Last Name <span class=\"required\">*</span></label>
                <input type=\"text\" class=\"lastName\" id=\"s_lastName\" maxlength=\"25\">
              </li>   
              <li>
                <label>Gender <span class=\"required\">*</span></label>
                <div class=\"customCheckBox gender\">
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box15\" value=\"male\" checked=\"checked\"><label for=\"box15\"><span></span> Male</label></div>
                  <div class=\"box\"><input type=\"radio\" name=\"gender\" id=\"box6\" value=\"female\"><label for=\"box6\"><span></span> Female</label></div>
                </div>
              </li>
              <li class=\"clear\">
                  <label>Date of Birth</label>
                <input type=\"text\" class=\"dobReg\" id=\"s_dobReg\" maxlength=\"10\">
              </li>
              <li>
                <label>Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"ppassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Confirm Password <span class=\"required\">*</span></label>
                <input maxlength=\"25\" class=\"cPassword\" type=\"password\" value=\"\">
              </li>
              <li>
                <label>Mobile Number <span class=\"required\">*</span></label>
                <div class=\"phoneNo\">
                  <input type=\"text\" value=\"+91\" maxlength=\"5\" id=\"s_cCode\">
                  <input type=\"tel\" class=\"mobNo\" id=\"s_mobNo\" maxlength=\"15\">
                </div>
              </li>
              <li>
                  <label>Course Type <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap crseErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_courseType\" class=\"courseType\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>
              <li class=\"dnone\">
                  <label>Course Name</label>
                <input type=\"text\" class=\"course\" id=\"s_course\" maxlength=\"50\">
              </li>
              <li>
                  <label>Joining Year <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap joinErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_joinYear\" class=\"joinYear\">
                      <option value=\"\">Select</option>
                      {% for i in 1979 .. curYr %}
                        <option value=\"{{ i }}\"> {{ i }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </li>
              <li>
                  <label>Batch Number <span class=\"required\">*</span></label>
                <div class=\"customSelect\">
                  <div class=\"dropdownWrap batchErr\">
                    <a class=\"shortDropLink\" href=\"javascript:;\">Select</a>
                    <select id=\"s_batch\" class=\"batch\">
                      <option value=\"\">Select</option>
                    </select>
                  </div>
                </div>
              </li>

              <li>
                  <label>IRMA Roll Number</label>
                <input type=\"text\" class=\"rollNo\" id=\"s_rollNo\" maxlength=\"50\">
              </li>
              <li class=\"clear\"><input class=\"button stdtReg\" type=\"button\" value=\"Register\"></li>
            </ul>
          </form>
          <input type=\"hidden\" id=\"tokenfid\" value=\"\">
          {{ page.content }}
          
        </div>
      </div><!-- /#content-header -->
    </div>
  </section>
</div>
{% if page.footer|render %}
  <footer><div class=\"container footer-container\">{{ page.footer }}</div></footer>
{% endif %}


";
    }
}
