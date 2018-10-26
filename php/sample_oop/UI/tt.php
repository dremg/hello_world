<?php

class cPropTableSubjectV2 {
        public $cPropTableSubject;

        function __construct($ro) {
          $cPropTableSubject ="
           <div class=\"divSubject\" name=\"divSubject$ro\" id=\"divSubject$ro\">
           <table name=\"cP_Subject$ro\" id=\"cP_Subject$ro\">
               <th> ITEM </th>
               <th colspan=2> SUBJECT </th>
                   <tr>
                   <td> Address </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> City and Zip </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Proximity to Subject </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Current List Price </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Current List Date </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Original List Price </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Original List Date </td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td>Days on Market</td>
                   <td colspan=2 class=cellFiller_black>&nbsp;</td>
                   </tr>
                   <tr>
                   <td colspan=3 class=cellFiller_blue>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol02\" colspan=2 align=center> DESCRIPTION </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol02\"> Tot # Rms </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"Subject-TotRms$ro\"  id=\"Subject-TotRms$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-TotRms$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Abv. Grade Area </td>
                   <td class=\"tableCol02\"> Bedrooms </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"Subject-Bedrooms$ro\" id=\"Subject-Bedrooms$ro\" oninput=\"updMirror('Subject-Bedrooms$ro')\" size=10 placeholder=\"#\"> </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol02\"> Baths **1 </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000 step=0.5 id=\"Subject-Baths$ro\" name=\"Subject-Baths$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Baths$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Abv. Grade Area **2 </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 id=\"Subject-Above_Grade_Area$ro\" name=\"Subject-Above_Grade_Area$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Above_Grade_Area$ro')\"> </td>
                   <td class=\"tableCol02\"> Sqrt </td>
                   </tr>
                   <tr>
                   <td> Basement </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 id=\"Subject-Basement$ro\" name=\"Subject-Basement$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Basement$ro')\"> </td>
                   <td class=\"tableCol02\"> Sqrt </td>
                   </tr>
                   <tr>
                   <td> Finished Basement </td>
                   <td class=\"tableCol02\"> <input $ro class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 id=\"Subject-Finished_Basement$ro\" name=\"Subject-Finished_Basement$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Finished_Basement$ro')\"> </td>
                   <td class=\"tableCol02\"> Sqrt </td>
                   </tr>
                   <tr>
                   <td> Site/Location **3</td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Site_Location$ro\" name=\"Subject-Site_Location$ro\" size=10 placeholder=\"Site Location\" oninput=\"updMirror('Subject-Site_Location$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> View **4</td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-View$ro\" name=\"Subject-View$ro\" size=10 placeholder=\"View\" oninput=\"updMirror('Subject-View$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Frontage **3</td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Frontage$ro\" name=\"Subject-Frontage$ro\" size=10 placeholder=\"Frontage\" oninput=\"updMirror('Subject-Frontage$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Lot Size (acres) </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"number\" min=0 max=1000000 step=0.01 id=\"Subject-Lot_Size$ro\" name=\"Subject-Lot_Size$ro\" size=10placeholder=\"# of Acres\" oninput=\"updMirror('Subject-Lot_Size$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Levels  &nbsp; &nbsp; Appeal </td>
                   <td class=\"tableCol02\" align=left> <input $ro class=\"inputBox02\" type=\"number\" min=1 max=200 step=1 id=\"Subject-Level$ro\" name=\"Subject-Level$ro\" size=10 placeholder=\"# of Levels\"> &nbsp; </td>
                   <td class=\"tableCol02\" align=center> <input $ro class=\"inputBox02\" type=\"text\" id=\"Subject-Appeal$ro\" name=\"Subject-Appeal$ro\" size=10 placeholder=\"Appeal\" oninput=\"updMirror('Subject-Level$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Age  &nbsp; &nbsp; &nbsp; Effetive Age </td>
                   <td class=\"tableCol02\" align=left> <input $ro class=\"inputBox02\" type=\"number\" min=1 max=300 step=1 id=\"Subject-Age$ro\" name=\"Subject-Age$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Age$ro')\"> &nbsp; </td>
                   <td class=\"tableCol02\" align=center> <input $ro class=\"inputBox02\" type=\"number\" min=1 max=300 step=1 id=\"Subject-Eff_Age$ro\" name=\"Subject-Eff_Age$ro\" size=10 placeholder=\"#\" oninput=\"updMirror('Subject-Eff_Age$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Condition **7</td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Condition$ro\" name=\"Subject-Condition$ro\" size=10 placeholder=\"Condition\" oninput=\"updMirror('Subject-Condition$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Quality **8 </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Quality$ro\" name=\"Subject-Quality$ro\" size=10 placeholder=\"Quality\" oninput=\"updMirror('Subject-Quality$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Fireplace </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Fireplace$ro\" name=\"Subject-Fireplace$ro\" size=10 placeholder=\"Fireplace\" oninput=\"updMirror('Subject-Fireplace$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Hardwood/Title </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Flooring$ro\" name=\"Subject-Flooring$ro\" size=10 placeholder=\"Flooring\" oninput=\"updMirror('Subject-Flooring$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Heating/Cooling </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Heating_Cooling$ro\" name=\"Subject-Heating_Cooling$ro\" size=10 placeholder=\"Heating/Cooling\" oninput=\"updMirror('Subject-Heating_Cooling$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Porch/Patio/Deck </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Porch_Patio_Deck$ro\" name=\"Subject-Porch_Patio_Deck$ro\" size=10 placeholder=\"Porch/Patio/Deck\" oninput=\"updMirror('Subject-Porch_Patio_Deck$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Pool/Spa </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Pool_Spa$ro\" name=\"Subject-Pool_Spa$ro\" size=10 placeholder=\"Pool/Spa\" oninput=\"updMirror('Subject-Pool_Spa$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Underground </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Sprinklers$ro\" name=\"Subject-Sprinklers$ro\" size=10 placeholder=\"Sprinklers\" oninput=\"updMirror('Subject-Sprinklers$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Landscaping </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Landscaping$ro\" name=\"Subject-Landscaping$ro\" size=10 placeholder=\"Landscaping\" oninput=\"updMirror('Subject-Landscaping$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Fencing </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"text\" id=\"Subject-Fencing$ro\" name=\"Subject-Fencing$ro\" size=10 placeholder=\"Fencing\" oninput=\"updMirror('Subject-Fencing$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Carport/Garage **9 </td>
                   <td class=\"tableCol02\" align=left> <input $ro class=\"inputBox02\" type=\"text\" id=\"Subject-Carport$ro\" name=\"Subject-Carport$ro\" size=10 placeholder=\"Carpot/Garage\" oninput=\"updMirror('Subject-Carport$ro');\"> </td>
                   <td class=\"tableCol02\" align=center> <input $ro class=\"inputBox02\" type=\"number\" min=0 step=1 id=\"Subject-Carport_Sqft$ro\" name=\"Subject-Carport_Sqft$ro\" size=10 placeholder=\"# of sf\" oninput=\"updMirror('Subject-Carport_Sqft$ro');\"> </td>
                   </tr>
                   <tr>

                   </tr>
                   <tr>
                   <td> <textarea class=\"itemTxtArea\" readonly id=\"Subject-Other_Features_lbl\" name=\"Subject-Other_Features_lbl\" cols=\"16\" rows=\"3\">&#13;&#10;Other Features</textarea> 
                   </td>
                   <td class=\"tableCol02\" colspan=2> <textarea id=\"Subject-Other_Features$ro\" name=\"Subject-Other_Features$ro\" cols=\"26\" rows=\"3\" oninput=\"updMirror('Subject-Other_Features$ro');\"></textarea> 
                   </td>
                   </tr>
                   <tr>

                   </tr>
                   <tr>
                   <td> Misc. Adjustment </td>
                   <td colspan=2  class=cellFiller_gray> &nbsp; </td>
                   </tr>
                   <tr>
                   <td> Misc. Adjustment </td>
                   <td colspan=2  class=cellFiller_gray> &nbsp; </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol03\" colspan=2 align=\"right\"> ADJUSTMENT TO TOTAL </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol03\" colspan=2 align=\"right\"> ADJUSTED VALUE </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol03\" colspan=2 align=\"right\"> ADJUSTED $/SF </td>
                   </tr>
                   <tr>
                   <td> &nbsp; </td>
                   <td class=\"tableCol03\" colspan=2 align=\"right\"> UNADJUSTED $/SF </td>
                   </tr>
                   <tr>
                   <td class=\"tableCol02\" colspan=3 align=\"right\"> Indicate Property Most Similar To Subject</td>

                   </tr>
                   <tr>
                   <td> Assesor RMV </td>
                   <td colspan=2 class=cellFiller_blue>&nbsp;</td>
                   </tr>
                   <tr>
                   <td> Land </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 id=\"Subject-Assessor_Land$ro\" name=\"Subject-Assessor_Land$ro\" size=10 placeholder=\"Land $\" oninput=\"updMirror('Subject-Assessor_Land$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Improvement </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 id=\"Subject-Assessor_Improvement$ro\" name=\"Subject-Assessor_Improvement$ro\" size=10 placeholder=\"Improvement $\" oninput=\"updMirror('Subject-Assessor_Improvement$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Land/acre </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 id=\"Subject-Assessor_Land_Acre$ro\" name=\"Subject-Assessor_Land_Acre$ro\" size=10 placeholder=\"Land/arce $\" oninput=\"updMirror('Subject-Assessor_Land_Acre$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Improvements/sf/2 </td>
                   <td class=\"tableCol02\" colspan=2> <input $ro class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 id=\"Subject-Assessor_Improvement_sf$ro\" name=\"Subject-Assessor_Improvement_sf$ro\" size=10 placeholder=\"Improvement/sf $\" oninput=\"updMirror('Subject-Assessor_Improvement_sf$ro')\"> </td>
                   </tr>
                   <tr>
                   <td> Diff. Land </td>
                   <td colspan=2  class=cellFiller_gray> &nbsp; </td>
                   </tr>
                   </tr>
                   <tr>
                   <td>Diff. Improvement</td>
                   <td colspan=2  class=cellFiller_gray> &nbsp; </td>
                   </tr>
               </table>
           </div> \n
            ";

            echo $cPropTableSubject;
        }

        function __toString() {
                return $this->cPropTableSubject . "";
        }

}

class cPropTableCompetitor {
    public $cPropTableComp;

    function __construct($compType,$compNum) {
        $lblCompType = "List/Sale Comp";

        if (strtoupper($compType) == "LC") $lblCompType = "List Comp $compNum";
        if (strtoupper($compType) == "SC") $lblCompType = "Sale Comp $compNum";

        $cPropTableComp = "

        <div class=divComp name=divComp$compType$compNum id=divComp$compType$compNum>
            <table name=\"cP_$compType$compNum\" id=\"cP_$compType$compNum\">
                    <th colspan=3> $lblCompType </th>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Street_Address\" size=10 placeholder=\"Street Address\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=2 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-City\" size=10 placeholder=\"City\">
                         </td>
                    <td  align=\"center\" width=\"33%\" class=cellFiller_orange>
                         <input class=\"inputBox01\" type=\"text\" name=\"$compType$compNum-State\" size=10 placeholder=\"State\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=2 align=\"center\"  class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Dist_to_Subject\" size=10 placeholder=\"Dist. to Subject\">
                         </td>
                    <td width=\"33%\" class=cellFiller_orange> miles </td>
                    </tr>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"number\" name=\"$compType$compNum-Current_List_Price\" size=10 placeholder=\"Current List $\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"date\" name=\"$compType$compNum-Current_List_Date\" size=10 placeholder=\"Current List Date\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"number\" name=\"$compType$compNum-Original_List_Price\" size=10 placeholder=\"Original List $\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"date\" name=\"$compType$compNum-Original_List_Date\" size=10 placeholder=\"Original List Date\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=3 align=\"center\" class=cellFiller_orange>
                         <input class=\"inputBox03\" type=\"number\" name=\"$compType$compNum-Days_On_Market\" size=10 placeholder=\"# Days On Market\">
                         </td>
                    </tr>
                    <tr>
                    <td colspan=3 class=cellFiller_blue>&nbsp;</td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2 align=center> DESCRIPTION </td>
                    <td class=\"tableCol02\" align=\"center\"> Adj. </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> Tot # Rms </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"$compType$compNum-TotRms\" size=10 placeholder=\"#\"> </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"$compType$compNum-TotRms_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> Bedrooms </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"$compType$compNum-Bedrooms\" size=10 placeholder=\"#\"> </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=1 name=\"$compType$compNum-Bedrooms_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> Baths **1 </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=0.5 name=\"$compType$compNum-Baths\" size=10 placeholder=\"#\"> </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000 step=0.5 name=\"$compType$compNum-Baths_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Above_Grade_Area\" size=10 placeholder=\"#\"> </td>
                    <td class=\"tableCol02\"> Sqrt </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Above_Grade_Area_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Basement\" size=10 placeholder=\"#\"> </td>
                    <td class=\"tableCol02\"> Sqrt </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Basement_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Finished_Basement\" size=10 placeholder=\"#\">  </td>
                    <td class=\"tableCol02\"> Sqrt </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=1 name=\"$compType$compNum-Finished_Basement_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Site_Location\" size=10 placeholder=\"Site Location\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Site_Location_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-View\" size=10 placeholder=\"View\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-View_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Frontage\" size=10 placeholder=\"Frontage\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Frontage_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"number\" min=0 max=1000000 step=0.01 name=\"$compType$compNum-Lot_Size\" size=10placeholder=\"# of Acres\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" min=0 max=1000000 step=0.01 name=\"$compType$compNum-Lot_Size_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"number\" min=1 max=200 step=1 name=\"$compType$compNum-Level\" size=10 placeholder=\"# of Levels\"> &nbsp; </td>
                    <td class=\"tableCol02\" align=center> <input class=\"inputBox02\" type=\"text\" name=\"$compType$compNum-Appeal\" size=10 placeholder=\"Appeal\">  </td>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"number\" min=1 max=200 step=1 name=\"$compType$compNum-Level_Adj\" size=10 placeholder=\"#\"> </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"number\" min=1 max=300 step=1 name=\"$compType$compNum-Age\" size=10 placeholder=\"#\"> &nbsp; </td>
                    <td class=\"tableCol02\" align=center> <input class=\"inputBox02\" type=\"number\" min=1 max=300 step=1 name=\"$compType$compNum-Eff_Age\" size=10 placeholder=\"#\">  </td>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"number\" min=1 max=300 step=1 name=\"$compType$compNum-Age_Adj\" size=10 placeholder=\"#\"> &nbsp; </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Condition\" size=10 placeholder=\"Condition\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Condition_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Quality\" size=10 placeholder=\"Quality\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Quality_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Fireplace\" size=10 placeholder=\"Fireplace\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Fireplace_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Flooring\" size=10 placeholder=\"Flooring\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Flooring_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Heating_Cooling\" size=10 placeholder=\"Heating/Cooling\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Heating_Cooling_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Porch_Patio_Deck\" size=10 placeholder=\"Porch/Patio/Deck\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Porch_Patio_Deck_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Pool_Spa\" size=10 placeholder=\"Pool/Spa\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Pool_Spa_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Sprinklers\" size=10 placeholder=\"Sprinklers\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Sprinklers_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Landscaping\" size=10 placeholder=\"Landscaping\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Landscaping_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-Fencing\" size=10 placeholder=\"Fencing\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-Fencing_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"text\" name=\"$compType$compNum-Carport\" size=10 placeholder=\"Carpot/Garage\">  </td>
                    <td class=\"tableCol02\" align=center> <input class=\"inputBox02\" type=\"number\" min=0 step=1 name=\"$compType$compNum-Carport_Sqft\" size=10 placeholder=\"# of sf\">  </td>
                    <td class=\"tableCol02\" align=left> <input class=\"inputBox02\" type=\"number\" min=0 step=1 name=\"$compType$compNum-Carport_Sqft_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3> <textarea name=\"$compType$compNum-Other_Features\" cols=\"43\" rows=\"3\"></textarea> </td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-MiscAdj01\" size=10 placeholder=\"Misc Notes 1\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-MiscAdj01_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=2> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-MiscAdj02\" size=10 placeholder=\"Misc. Notes 2\">  </td>
                    <td class=\"tableCol02\"> <input class=\"inputBox02\" type=\"number\" name=\"$compType$compNum-MiscAdj02_Adj\" size=10 placeholder=\"#\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-TotAdj\" size=10 placeholder=\"Total Adjustment\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-AdjValue\" size=10 placeholder=\"Adjusted Value\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-AdjPerSF\" size=10 placeholder=\"Adjusted $/sf\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"text\" name=\"$compType$compNum-UnAdjPerSF\" size=10 placeholder=\"Unadjusted $/sf\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=4 align=center> <input class=\"inputBox02\" type=\"text\" name=\"$compType$compNum-MostSimilar\" size=10 placeholder=\"X\">  </td>

                    </tr>
                    <tr>
                    <td colspan=3 class=cellFiller_blue>&nbsp;</td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Assessor_Land\" size=10 placeholder=\"Land $\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Assessor_Improvement\" size=10 placeholder=\"Improvement $\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Assessor_Land_Acre\" size=10 placeholder=\"Land/arce $\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Assessor_Improvement_sf\" size=10 placeholder=\"Improvement/sf $\">  </td>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Diff_Land\" size=10 placeholder=\"Diff Land $\">  </td>
                    </tr>
                    </tr>
                    <tr>
                    <td class=\"tableCol02\" colspan=3 align=center> <input class=\"inputBox03\" type=\"number\" min=0 max=10000000 step=1 name=\"$compType$compNum-Diff_Improvement\" size=10 placeholder=\"Diff. Improvement $\">  </td>
                    </tr>
                </table>
            </div> 
            \n";

          echo $cPropTableComp;

    }

    function __toString() {
            return $this->cPropTableComp . "";
    }

}

class ttCSS {
    function __construct() {

    }

    function cssBody() {
        //Stylesheet for <body> tag
    }

    function cssDivContainer() {
        //Stylesheet for <body> tag
		$css = "
		.Container {
			align: center;
		}
		\n";

		echo $css;
    }

    function cssItemTable() {
        //Stylesheet for <div name=divItem> tag
        $cssIT = "
        .divItems {
            float: left;
            align: left;
        }

        .divItems textarea {
            font:  bold 9px Georgia, Times, serif, sans-serif, arial;
            border: 0px;
            resize: none;
        }

        .divItems table th {
            align: center;
            font:  bold 10px Georgia, Times, serif, sans-serif, arial;
        }

        .divItems table td {
            font:  bold 9px Georgia, Times, serif, sans-serif, arial;
            height: 15px;
        }

        .cellFiller_blue {
            background-color: blue;
        }
        \n";

        echo $cssIT;
    }

    function cssSubjectTable() {
        //Stylesheet for <div name=divSubject> tag
        $css = "
        .divSubject {
            float: left;
            align: left;
        }

        .divSubject input {
            text-align: center;
            font: normal 8px arial, Times, Georgia, serif, sans-serif;
        }

        .divSubject textarea {
            font:  normal 8px arial, Times, Georgia, serif, sans-serif;
            resize: none;
        }

        .itemTxtArea {
            font-family:  Georgia, Times, serif, sans-serif, arial;
            font-size: 9px;
            font-weight: bold;
            border: 0px;
            resize: none;
        }

        .divSubject table {
            border: 1px solid black;
        }

        .divSubject table th {
            align: center;
            font:  bold 10px Georgia, Times, serif, sans-serif, arial;
        }

        .divSubject table td {
            font:  bold 9px Georgia, Times, serif, sans-serif, arial;
            height: 15px;
        }

        .cellFiller_black {
            background-color: black;
        }
        
        .cellFiller_gray {
            background-color: gray;
        }

        .cellFiller_orange {
            background-color: #ffb900;
        }

        .tableCol00 {
            width: 125px;
        }

        .tableCol01 {
            width: 50px;
        }

        .tableCol02 {
            width: 70px;
        }

        .tableCol03 {
            width: 140px;
        } 

        .inputBox01 {
            height: 10.5px;
            width: 40px;
        }

        .inputBox02 {
            height: 10.5px;
            width: 100px;
        }

        .inputBox03 {
            height: 10.5px;
            width: 170px;
        }        
        \n";

        echo $css;        
    }

    function cssCompTable() {
        //Stylesheet for <div name=divComp> tag
        $css = "
        .divComp {
            float: left;
            align: left;
        }

        .divComp input {
            text-align: center;
            font: normal 8px arial, Times, Georgia, serif, sans-serif;
        }


        .divComp textarea {
            font:  normal 8px arial, Times, Georgia, serif, sans-serif;
            resize: none;
        }        

        .divComp table {
            border: 1px solid black;
        }

        .divComp table th {
            align: center;
            font:  bold 10px Georgia, Times, serif, sans-serif, arial;
        }

        .divComp table td {
            font:  bold 9px Georgia, Times, serif, sans-serif, arial;
            height: 15px;
            width: 60px;
        }

        .cellFiller_black {
            background-color: black;
            width: 140px;
        }
        
        .cellFiller_gray {
            background-color: gray;
            width: 140px;
        }

        .tableCol00 {
            //width: 125px;
        }

        .tableCol01 {
            //width: 35px;
        }

        .tableCol02 {
            //width: 70px;
        }

        .tableCol03 {
            //width: 140px;
        } 

        .inputBox01 {
            height: 11px;
            width: 30px;
            text-align: center;
        }

        .inputBox02 {
            height: 11px;
            width: 40px;
            text-align: center;
        }

        .inputBox03 {
            height: 11px;
            width: 150px;
            text-align: center;
        }        
        \n";

        echo $css;
    }
    
}

class ttJavascript {
    function __construct() {
        $js = "

            function updMirror(src) {
                dstName = src + \"readonly\";
                //alert(dstName);
                src = document.getElementById(src);
                dst = document.getElementById(dstName);
                dst.value = src.value;
            }
        \n";

        echo $js;
    }
}

class htmlTags {
    function htmlDocWithOpenHeader() {
        $htmlDocStart = "
        
        <html>
            <head>
			<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
        \n";

        echo $htmlDocStart;
    }

    function htmlScriptOpen() {
        $htmlScriptStart = "    <script type=\"text/javascript\">";

        echo $htmlScriptStart;
    }

    function htmlScriptClose() {
        $htmlScriptClose = "    </script> \n";

        echo $htmlScriptClose;
    }

    function htmlDocWithBodyClose() {
        $htmlDocEnd = "
        
            </body>
        </html>
        \n";

        echo $htmlDocEnd;
    }
    
    function htmlBodyOpen() {
        $htmlBodyOpen = "
        
            <body>
        \n";

        echo $htmlBodyOpen;
    }    

    function htmlHeaderClose() {
        $htmlHeaderClose = "
        
            </head>
        \n";

        echo $htmlHeaderClose;
    }    

    function htmlHeaderTitle($title) {
        $htmlHeaderTitle ="
        <title>$title</title>
        \n";

        echo $htmlHeaderTitle;
    }

    function htmlStyleOpen() {
        $htmlStyleOpen = "
        
            <style>
        \n";

        echo $htmlStyleOpen;
    }
    
    function htmlStyleClose() {
        $htmlStyleClose = "
        
            </style>
        \n";

        echo $htmlStyleClose;
    } 
    
    function htmlDivOpen($divName) {
        $htmlDivOpen = "
            <div class=$divName name=$divName id=$divName>
        \n";

        echo $htmlDivOpen;    
    }

    function htmlDivClose() {
        $htmlDivClose = "
            </div>
        \n";

        echo $htmlDivClose;
    }    
}


$htmlTags = new htmlTags();
$ttCSS = new ttCSS();

$htmlTags->htmlDocWithOpenHeader();
$htmlTags->htmlHeaderTitle("iNet TriTier");
$htmlTags->htmlScriptOpen();
    $ttJS = new ttJavascript();
$htmlTags->htmlScriptClose();
$htmlTags->htmlHeaderClose();

//embed css tags
$htmlTags->htmlStyleOpen();
    //embed css text
	$ttCSS->cssDivContainer();
    $ttCSS->cssItemTable();
    $ttCSS->cssSubjectTable();
    $ttCSS->cssCompTable();
$htmlTags->htmlStyleClose();

//open html <body> tag
$htmlTags->htmlBodyOpen();

//embed html body content
$htmlTags->htmlDivOpen("\"Container\"" );

//$cProp_Items = new cPropTableItems();
$cProp_Subject = new cPropTableSubjectV2("");
$cProp_LC1 = new cPropTableCompetitor("lc",1);
$cProp_LC2 = new cPropTableCompetitor("lc",2);
$cProp_LC3 = new cPropTableCompetitor("lc",3);
$cProp_LC4 = new cPropTableCompetitor("lc",4);

$cProp_Subject_Mirror = new cPropTableSubjectV2("readonly");
$cProp_SC1 = new cPropTableCompetitor("sc",1);
$cProp_SC2 = new cPropTableCompetitor("sc",2);
$cProp_SC3 = new cPropTableCompetitor("sc",3);
$cProp_SC4 = new cPropTableCompetitor("sc",4);
$cProp_SC5 = new cPropTableCompetitor("sc",5);
$cProp_SC6 = new cPropTableCompetitor("sc",6);

$htmlTags->htmlDivClose();

//close BODY and HTML tags
$htmlTags->htmlDocWithBodyClose();


/*
javascript snippits

// js set form value
function updateInput(ish){
  document.getElementById("fieldname").value = ish;

  Enter name: <input type="text" value="Mickey" oninput="myFunction()">

<script>
function myFunction() {
    alert("The value of the input field was changed.");
}
</script>
}

*** Stackoverflow
https://stackoverflow.com/questions/22646465/how-to-copy-value-from-one-input-field-to-another

*/
?>
