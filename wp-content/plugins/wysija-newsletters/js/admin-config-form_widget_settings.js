function generateWidgetTemplate(a){if(a===undefined){window.parent.WysijaPopup.cancel()}else{wysijaAJAX.task="wysija_form_generate_template";wysijaAJAX.wysijaData=Base64.encode(Object.toJSON(a).gsub('\\"','"').gsub('"[{',"[{").gsub('}]"',"}]"));new Ajax.Request(wysijaAJAX.ajaxurl,{method:"post",parameters:wysijaAJAX,onSuccess:function(b){window.parent.WysijaPopup.success(b.responseJSON.result)},onFailure:function(b){window.parent.WysijaPopup.cancel()}})}}function saveData(c){if(c.label!==undefined){c.label=window.parent.WysijaForm.encodeHtmlValue(c.label)}switch(c.type){case"input":break;case"submit":break;case"text":c.text=window.parent.WysijaForm.encodeHtmlValue(c.text);break;case"list":var a=$("lists-selection").select("input");if(a.length===0){throw new Error(window.parent.wysijatrans.list_cannot_be_empty)}else{var b=[];a.each(function(e,d){b.push({list_id:+e.readAttribute("data-list"),is_checked:+e.checked})});c.values=b}break}delete c.name;delete c.field;delete c.type;delete c.submit;return c}function hideError(){$("widget-settings-error").update("").hide();window.parent.WysijaPopup.setDimensions()}function displayError(a){$("widget-settings-error").update(a.message).show();window.parent.WysijaPopup.setDimensions()}function setupSortableList(){if($$("ul.sortable").length>0){var a=$$(".sortable").first();Sortable.create(a,{tag:"li",scroll:window,handle:"handle",constraint:"vertical"})}}function setAvailableLists(){var a=$("lists-selection").select("input").map(function(b){return $(b).readAttribute("data-list")});$("lists-available").select("option").each(function(b){if(a.include(b.value)){b.remove()}});$("lists-add-container")[($("lists-available").length===0)?"hide":"show"]()}document.observe("dom:loaded",function(){switch($("widget-settings-form").type.value){case"list":$("lists-add-container").on("click","a.add",function(){if($("lists-available").selectedIndex>=0){var b={name:$("lists-available").options[$("lists-available").selectedIndex].innerHTML,list_id:$F("lists-available")};var a=new Template($("list-selection-template").innerHTML);$("lists-selection").insert(a.evaluate(b));setupSortableList();setAvailableLists();window.parent.WysijaPopup.setDimensions()}return false});$("lists-selection").on("click","a.remove",function(b,a){$("lists-available").insert(new Element("option",{value:$(a).previous("input").readAttribute("data-list")}).update($(a).previous("label").innerHTML));$(a).up("li").remove();setupSortableList();setAvailableLists();window.parent.WysijaPopup.setDimensions()});setupSortableList();setAvailableLists();break}$("widget-settings-submit").observe("click",function(c){c.preventDefault();hideError();var a=$H(),b=$("widget-settings-form").serialize(true);a.set("type",b.type);a.set("field",b.field);a.set("name",b.name);try{a.set("params",saveData(b));generateWidgetTemplate(a)}catch(c){displayError(c)}return false})});