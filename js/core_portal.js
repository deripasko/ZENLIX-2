$(document).ready(function(){function e(){$.fn.editable.defaults.mode="inline",$("a#edit_item_todo").each(function(e,t){$(t).editable({inputclass:"form-control input-sm input-longtext",emptytext:"пусто",params:{mode:"save_todo"},tpl:"<input type='text' style='width: 450px'>"})}),$(".sortable").nestedSortable({ForcePlaceholderSize:!0,handle:"div",helper:"clone",items:"li",opacity:.6,placeholder:"placeholder",revert:250,tabSize:25,tolerance:"pointer",toleranceElement:"> div",maxLevels:1,update:function(){list=$(this).nestedSortable("serialize"),$.post(s,{mode:"sort_todo",list:list},function(e){console.log(e)})}}),$("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({checkboxClass:"icheckbox_minimal",radioClass:"iradio_minimal"})}function t(){$.fn.editable.defaults.mode="inline",$("a#edit_item_qa").each(function(e,t){$(t).editable({inputclass:"input-sm",emptytext:"пусто",params:{mode:"save_manual_item_qa"},tpl:"<input type='text' style='width: 450px'>"})}),$(".sortable").nestedSortable({ForcePlaceholderSize:!0,handle:"div",helper:"clone",items:"li",opacity:.6,placeholder:"placeholder",revert:250,tabSize:25,tolerance:"pointer",toleranceElement:"> div",maxLevels:1,update:function(){list=$(this).nestedSortable("serialize"),$.post(s,{mode:"sort_units_manual_qa",list:list},function(e){console.log(e)})}}),$("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({checkboxClass:"icheckbox_minimal",radioClass:"iradio_minimal"})}function a(){$.fn.editable.defaults.mode="inline",$("a#edit_item").each(function(e,t){$(t).editable({inputclass:"input-sm",emptytext:"пусто",params:{mode:"save_manual_item"},tpl:"<input type='text' style='width: 350px'>"})}),$(".sortable").nestedSortable({ForcePlaceholderSize:!0,handle:"div",helper:"clone",items:"li",opacity:.6,placeholder:"placeholder",revert:250,tabSize:25,tolerance:"pointer",toleranceElement:"> div",maxLevels:4,update:function(){list=$(this).nestedSortable("serialize"),$.post(s,{mode:"sort_units_manual",list:list},function(e){console.log(e)})}}),$("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({checkboxClass:"icheckbox_minimal",radioClass:"iradio_minimal"})}function o(){var e=moment().zone("+04:00");$("time#a").each(function(t,a){var o=moment($(a).attr("datetime"));$(a).html("<span>"+o.from(e)+"</span>")}),$("time#b").each(function(t,a){var o=moment($(a).attr("datetime"));$(a).html("<span>"+o.from(e)+"</span>")}),$("time#c").each(function(e,t){var a=moment($(t).attr("datetime"));$(t).html("<span>"+a.format("ddd, Do MMM, H:mm:ss")+"</span>")}),$("time#d").each(function(e,t){var a=moment($(t).attr("datetime"));$(t).html("<span>"+a.format("dddd, Do MMMM")+"</span>")})}function n(e){var t=window.location.href,a=!1;return t.search(e)>=0&&(a=!0),a}function i(e,t,a){data=new FormData,data.append("file",e),data.append("mode","summernote_file_add"),$.ajax({data:data,type:"POST",url:c,cache:!1,contentType:!1,processData:!1,success:function(e){t.insertImage(a,e)}})}function l(e){var t="",a="",o=window.location.href;return o.search("inc")>=0&&(a="../"),$.ajax({type:"POST",url:c,data:"mode=get_lang_param&param="+encodeURIComponent(e),async:!1,success:function(e){t=e}}),t}$.ajaxSetup({cache:!1}),$(".fancybox").fancybox({openEffect:"elastic",closeEffect:"elastic"}),$("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({checkboxClass:"icheckbox_minimal",radioClass:"iradio_minimal"}),moment.lang(MyLANG),o(!0);var c=MyHOSTNAME+"action",s=MyHOSTNAME+"portal_action";if($("body").on("click","button#find_in_manual",function(e){e.preventDefault(),window.location="manual?find="+$("input#navbar-search-input").val()}),$("body").on("click","button#register_new",function(e){e.preventDefault(),$.ajax({type:"POST",url:c,dataType:"json",data:"mode=register_new&fio="+$("#login_fio").val()+"&login="+$("#login_name").val()+"&mail="+$("#login_mail").val(),success:function(e){e&&$.each(e,function(e,t){"true"==t.check_error?($("#main_form_register").html(t.msg),setTimeout(function(){window.location="./"},5e3)):"false"==t.check_error&&$("#error_result").html(t.msg)})}})}),$("body").on("click","#delete_manual",function(e){e.preventDefault();var t=$(this).val();bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:"mode=helper_item_del&id="+t,success:function(){window.location=MyHOSTNAME+"manual"}})})}),$("#text_idea").keyup(function(e){13==e.keyCode&&$("#make_new_post_idea").click()}),$("#text_problem").keyup(function(e){13==e.keyCode&&$("#make_new_post_problem").click()}),$("#text_quest").keyup(function(e){13==e.keyCode&&$("#make_new_post_quest").click()}),$("#text_review").keyup(function(e){13==e.keyCode&&$("#make_new_post_review").click()}),$("body").on("click","button#new_post_page",function(e){e.preventDefault();var t=$(this).val();window.location=MyHOSTNAME+"new_post?p="+t+"&session_key=1"}),$("body").on("click","button#make_new_post_idea",function(e){e.preventDefault();var t=$("#text_idea").val();$("#new_post_page").val("1"),$.ajax({type:"POST",url:s,dataType:"json",data:"mode=new_post_check&text_idea="+t,success:function(e){$.each(e,function(e,a){0==a.check_state?window.location=MyHOSTNAME+"new_post?p=1&session_key=1":1==a.check_state&&$.ajax({type:"POST",url:s,data:"mode=get_res_post_check&text_idea="+t,success:function(e){$("#maybe_res").html(e),$("#maybe").hide().fadeIn(500)}})})}})}),$("body").on("click","button#make_new_post_problem",function(e){e.preventDefault(),$("#new_post_page").val("2");var t=$("#text_problem").val();$.ajax({type:"POST",url:s,dataType:"json",data:"mode=new_post_check&text_idea="+t,success:function(e){$.each(e,function(e,a){0==a.check_state?window.location=MyHOSTNAME+"new_post?p=2&session_key=1":1==a.check_state&&$.ajax({type:"POST",url:s,data:"mode=get_res_post_check&text_idea="+t,success:function(e){$("#maybe_res").html(e),$("#maybe").hide().fadeIn(500)}})})}})}),$("body").on("click","button#make_new_post_quest",function(e){e.preventDefault();var t=$("#text_quest").val();$("#new_post_page").val("3"),$.ajax({type:"POST",url:s,dataType:"json",data:"mode=new_post_check&text_idea="+t,success:function(e){$.each(e,function(e,a){0==a.check_state?window.location=MyHOSTNAME+"new_post?p=3&session_key=1":1==a.check_state&&$.ajax({type:"POST",url:s,data:"mode=get_res_post_check&text_idea="+t,success:function(e){$("#maybe_res").html(e),$("#maybe").hide().fadeIn(500)}})})}})}),$("body").on("click","button#make_new_post_review",function(e){e.preventDefault();var t=$("#text_review").val();$("#new_post_page").val("4"),$.ajax({type:"POST",url:s,dataType:"json",data:"mode=new_post_check&text_idea="+t,success:function(e){$.each(e,function(e,a){0==a.check_state?window.location=MyHOSTNAME+"new_post?p=4&session_key=1":1==a.check_state&&$.ajax({type:"POST",url:s,data:"mode=get_res_post_check&text_idea="+t,success:function(e){$("#maybe_res").html(e),$("#maybe").hide().fadeIn(500)}})})}})}),n("edit_cat")&&($("body").on("click","i#edit_manual_cat",function(e){e.preventDefault();var t=$(this).attr("value");window.location=MyHOSTNAME+"manual?"+t+"&edit_manual"}),$("body").on("click","i#open_link",function(e){e.preventDefault();var t=$(this).attr("value");window.location=MyHOSTNAME+"manual?"+t}),$(document).on("ifChanged","#make_main_manual",function(){var e=$(this).attr("value"),t=$(this).prop("checked");$.post(s,{mode:"change_manual_cat_main",hash:e,name:t})}),$(document).on("ifChanged","#make_cat_manual",function(){var e=$(this).attr("value"),t=$(this).prop("checked");$.post(s,{mode:"change_manual_cat_type",hash:e,name:t})}),$("body").on("click","i#del_item_no",function(e){e.preventDefault();var t=l("JS_HELPER_error_to_del");noty({text:t,layout:"center",type:"information",timeout:3e3})}),$("body").on("click","i#del_item",function(e){e.preventDefault();var t=$(this).attr("value");bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:"mode=helper_item_del&id="+t,success:function(e){$("#content_items").html(e),a()}}),0==e&&console.log("false")})}),$("body").on("click","button#add_manual_item",function(e){e.preventDefault(),$.ajax({type:"POST",url:s,data:"mode=items_view",success:function(e){$("#content_items").html(e),a()}})}),a()),n("edit_some_qa")&&($("body").on("click","button#make_edit_manual_qa",function(e){e.preventDefault();var t=$("#manual_hash").val(),a=$("#note").code(),o=$("#subj").val(),n={mode:"edit_manual_qa",subj:o,msg:a,hn:t};$.ajax({type:"POST",url:s,data:n,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,t){1==t.check_error?window.location=MyHOSTNAME+"manual?edit_qa":0==t.check_error&&$("#post_res").hide().html(t.msg).fadeIn(500)})}})}),$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}})),n("edit_qa")&&($("body").on("click","i#del_item_qa",function(e){e.preventDefault();var a=$(this).attr("value");bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:"mode=helper_qa_del&id="+a,success:function(e){$("#content_items").html(e),t()}}),0==e&&console.log("false")})}),$("body").on("click","i#edit_manual_qa",function(e){e.preventDefault();var t=$(this).attr("value");window.location=MyHOSTNAME+"manual?edit_some_qa="+t}),$("body").on("click","button#add_qa_item",function(e){e.preventDefault(),$.ajax({type:"POST",url:s,data:"mode=items_qa_view",success:function(e){$("#content_items").html(e),t()}})}),t()),n("edit_manual")){$("body").on("click","button#make_edit_manual",function(e){e.preventDefault();var t=$("#manual_hash").val(),a=$("#note").code(),o=$("#subj").val(),n={mode:"edit_manual",subj:o,msg:a,hn:t};$.ajax({type:"POST",url:s,data:n,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"manual?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})});var r=document.querySelector("#template");r.id="";var d=r.parentNode.innerHTML;r.parentNode.removeChild(r);var u=$("#manual_hash").val();$("#myid").dropzone({url:s,maxFilesize:100,paramName:"myfile",params:{mode:"upload_post_file",post_hash:u,type:"0",is_tmp:"1"},removedfile:function(e){var t;return null!=(t=e.previewElement)?t.parentNode.removeChild(e.previewElement):void 0},maxThumbnailFilesize:5,previewTemplate:d,previewsContainer:"#previews",autoQueue:!0,maxFiles:50,init:function(){this.on("success",function(e,t){var a=jQuery.parseJSON(t);$.each(a,function(t,a){"ok"==a.status?$(e.previewTemplate).append('<input type="hidden" class="server_file" value="'+a.uniq_code+'">'):"error"==a.status&&$(e.previewTemplate).html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+a.msg+"</div>").fadeOut(3e3)})}),this.on("removedfile",function(e){var t=$(e.previewTemplate).children(".server_file").val();$.ajax({type:"POST",url:s,data:"mode=delete_post_file&uniq_code="+t,dataType:"html"})}),this.on("addedfile",function(e){console.log(e)}),this.on("drop",function(){})}}),$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}})}if(n("new_manual")){$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}}),$("body").on("click","button#make_new_manual_data",function(e){e.preventDefault();var t=$("#manual_hash").val(),a=$("#note").code(),o=$("#type").val(),n=$("#subj").val(),i={mode:"add_manual",subj:n,msg:a,hn:t,type:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"manual?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})});var r=document.querySelector("#template");r.id="";var d=r.parentNode.innerHTML;r.parentNode.removeChild(r);var u=$("#manual_hash").val();$("#myid").dropzone({url:s,maxFilesize:100,paramName:"myfile",params:{mode:"upload_post_file",post_hash:u,type:"0",is_tmp:"1"},removedfile:function(e){var t;return null!=(t=e.previewElement)?t.parentNode.removeChild(e.previewElement):void 0},maxThumbnailFilesize:5,previewTemplate:d,previewsContainer:"#previews",autoQueue:!0,maxFiles:50,init:function(){this.on("success",function(e,t){var a=jQuery.parseJSON(t);$.each(a,function(t,a){"ok"==a.status?$(e.previewTemplate).append('<input type="hidden" class="server_file" value="'+a.uniq_code+'">'):"error"==a.status&&$(e.previewTemplate).html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+a.msg+"</div>").fadeOut(3e3)})}),this.on("removedfile",function(e){var t=$(e.previewTemplate).children(".server_file").val();$.ajax({type:"POST",url:s,data:"mode=delete_post_file&uniq_code="+t,dataType:"html"})}),this.on("addedfile",function(e){console.log(e)}),this.on("drop",function(){})}})}if(n("new_post")){$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}});var r=document.querySelector("#template");r.id="";var d=r.parentNode.innerHTML;r.parentNode.removeChild(r);var u=$("#post_hash").val();$("#myid").dropzone({url:s,maxFilesize:100,paramName:"myfile",params:{mode:"upload_post_file",post_hash:u,type:"0",is_tmp:"0"},removedfile:function(e){var t;return null!=(t=e.previewElement)?t.parentNode.removeChild(e.previewElement):void 0},maxThumbnailFilesize:5,previewTemplate:d,previewsContainer:"#previews",autoQueue:!0,maxFiles:50,init:function(){this.on("success",function(e,t){var a=jQuery.parseJSON(t);$.each(a,function(t,a){"ok"==a.status?$(e.previewTemplate).append('<input type="hidden" class="server_file" value="'+a.uniq_code+'">'):"error"==a.status&&$(e.previewTemplate).html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+a.msg+"</div>").fadeOut(3e3)})}),this.on("removedfile",function(e){var t=$(e.previewTemplate).children(".server_file").val();$.ajax({type:"POST",url:s,data:"mode=delete_post_file&uniq_code="+t,dataType:"html"})}),this.on("addedfile",function(e){console.log(e)}),this.on("drop",function(){})}}),$("body").on("click","button#make_new_post_data",function(e){e.preventDefault();var t=$("#post_hash").val(),a=$("#note").code(),o=$("#type").val(),n=$("#subj").val(),i={mode:"add_post",subj:n,msg:a,hn:t,type:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"thread?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})})}if(n("cat")){var p={currentPage:$("#cur_page").val(),totalPages:$("#total_pages").val(),bootstrapMajorVersion:3,size:"small",itemContainerClass:function(e,t,a){return t===a?"active":"pointer-cursor"},onPageClicked:function(e,t,a,o){var n=$("#curent_page").attr("value"),i=$("#st_str").attr("value");o!=n&&(window.location=MyHOSTNAME+"cat?"+$("#cat").val()+i+"&p="+o)}};$("#cat_post").bootstrapPaginator(p)}if(n("edit_feed")&&($("body").on("click","button#make_edit_feed",function(e){e.preventDefault();var t=$("#news_hash").val(),a=$("#note").code(),o=$("#title").val(),n=$("#subj").val(),i={mode:"edit_news",subj:n,msg:a,hn:t,title:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"feed?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})}),$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}})),n("version")&&($(document).on("ifChanged","#make_todo_success",function(){var e=$(this).attr("value"),t=$(this).prop("checked");$.post(s,{mode:"change_todo_success",hash:e,name:t})}),e(),$("body").on("click","i#del_item_todo",function(t){t.preventDefault();var a=$(this).attr("value");bootbox.confirm(l("JS_del"),function(t){1==t&&$.ajax({type:"POST",url:s,data:"mode=todo_item_del&id="+a,success:function(t){$("#content_items").html(t),e()}}),0==t&&console.log("false")})}),$("body").on("click","button#conf_edit_version_banner",function(e){e.preventDefault(),$.ajax({type:"POST",url:s,data:"mode=conf_edit_version_banner&portal_box_version_n="+encodeURIComponent($("#portal_box_version_n").val())+"&portal_box_version_text="+encodeURIComponent($("#portal_box_version_text").val())+"&portal_box_version_icon="+encodeURIComponent($("#portal_box_version_icon").val()),success:function(e){$("#conf_edit_version_banner_res").hide().html(e).fadeIn(500),setTimeout(function(){$("#conf_edit_version_banner_res").children(".alert").fadeOut(500)},3e3)}})}),$("body").on("click","button#add_todo_item",function(t){t.preventDefault(),$.ajax({type:"POST",url:s,data:"mode=items_todo_view",success:function(t){$("#content_items").html(t),e()}})}),$("body").on("click","button#make_new_version",function(e){e.preventDefault();var t=$("#news_hash").val(),a=$("#note").code(),o=$("#title").val(),n=$("#subj").val(),i={mode:"add_version",subj:n,msg:a,hn:t,title:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"version?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})}),$("body").on("click","button#make_edit_version",function(e){e.preventDefault();var t=$("#news_hash").val(),a=$("#note").code(),o=$("#title").val(),n=$("#subj").val(),i={mode:"edit_version",subj:n,msg:a,hn:t,title:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"version?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})}),$("body").on("click","#delete_version",function(e){e.preventDefault();var t=$(this).val();bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:{mode:"del_version",news_hash:t},success:function(){window.location=MyHOSTNAME+"version"}})})})),n("feed")&&$("body").on("click","#delete_news",function(e){e.preventDefault();var t=$(this).val();bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:{mode:"del_news",news_hash:t},success:function(){window.location=MyHOSTNAME+"feed"}})})}),n("new_feed")&&($("body").on("click","button#make_new_feed",function(e){e.preventDefault();var t=$("#news_hash").val(),a=$("#note").code(),o=$("#title").val(),n=$("#subj").val(),i={mode:"add_news",subj:n,msg:a,hn:t,title:o};$.ajax({type:"POST",url:s,data:i,dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"feed?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})}),$("#note").summernote({height:300,focus:!0,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}})),n("thread")){$("body").on("click",".make_cat_type",function(e){e.preventDefault();var t=$(this).val(),a=$(this).attr("option");$.ajax({type:"POST",url:s,data:{mode:"set_post_cat",post_hash:t,type:a},success:function(){window.location=MyHOSTNAME+"thread?"+t}})}),$(".direct-chat-msg").on({mouseenter:function(){$(this).find(".subclass").fadeIn(800)},mouseleave:function(){$(this).find(".subclass").css("display","none")}}),$("body").on("click",".main-post-del",function(e){e.preventDefault();var t=$(this).attr("value");bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:{mode:"del_post",post_hash:t},success:function(e){console.log(e),window.location=MyHOSTNAME}})})}),$("body").on("click",".main-cancel-edit",function(e){e.preventDefault();var t=$(this).val(),a=$("#post").attr("value");$("#"+t+" .editable_text").destroy(),$("#"+t+" .comment-bar").fadeIn(800),$("#"+t+" .edit-bar").hide(),$.ajax({type:"POST",url:s,data:{mode:"get_orig_post",post_hash:t,type:a},success:function(e){$("#"+t+" .editable_text").html(e)}})}),$("body").on("click","a#delete_file",function(e){e.preventDefault();var t=$(this).attr("value"),a=$("#post").attr("value");$.ajax({type:"POST",url:s,data:{mode:"delete_file",file_hash:t},success:function(){window.location=MyHOSTNAME+"thread?"+a}})}),$("body").on("click",".cancel-edit",function(e){e.preventDefault();var t=$(this).val(),a=$("#post").attr("value");$("#"+t+" .editable_text").destroy(),$("#"+t+" .edit-bar").hide(),$.ajax({type:"POST",url:s,data:{mode:"get_orig_comment",post_hash:t,type:a},success:function(e){$("#"+t+" .editable_text").html(e)}})}),$("body").on("click",".main-save-edit",function(e){e.preventDefault();var t=$(this).val(),a=$("#"+t+" .editable_text").code(),o=$("#post").attr("value");$("#"+t+" .editable_text").destroy(),$.ajax({type:"POST",url:s,data:{mode:"update_post",post_hash:t,msg:a,type:o},success:function(e){$("#"+t+" .editable_text").html(e)}})}),$("body").on("click",".save-edit",function(e){e.preventDefault();var t=$(this).val(),a=$("#"+t+" .editable_text").code(),o=$("#post").attr("value");$("#"+t+" .editable_text").destroy(),$("#"+t+" .comment-bar").fadeIn(800),$("#"+t+" .edit-bar").hide(),$.ajax({type:"POST",url:s,data:{mode:"update_comment",post_hash:t,msg:a,type:o},success:function(e){$("#"+t+" .editable_text").html(e)}})}),$("body").on("click",".post-del",function(e){e.preventDefault();var t=$(this).val(),a=$("#post").val(),o=$("#post").attr("value");bootbox.confirm(l("JS_del"),function(e){1==e&&$.ajax({type:"POST",url:s,data:{mode:"del_comment",post_hash:t,type:o},success:function(){window.location=MyHOSTNAME+"thread?"+a}})})}),$("body").on("click",".main-post-edit",function(e){e.preventDefault();var t=$(this).val();$("#"+t+" .editable_text").summernote({height:200,focus:!1,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}}),$("#"+t+" .comment-bar").hide(),$("#"+t+" .edit-bar").fadeIn(800)}),$("body").on("click",".post-edit",function(e){e.preventDefault();var t=$(this).val();$("#"+t+" .editable_text").summernote({height:200,focus:!1,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}}),$("#"+t+" .comment-bar").hide(),$("#"+t+" .edit-bar").fadeIn(800)});var m={currentPage:$("#cur_page").val(),totalPages:$("#total_pages").val(),bootstrapMajorVersion:3,size:"small",itemContainerClass:function(e,t,a){return t===a?"active":"pointer-cursor"},onPageClicked:function(e,t,a,o){var n=$("#curent_page").attr("value");o!=n&&(window.location=MyHOSTNAME+"thread?"+$("#post").val()+"&p="+o)}};if($("#comm_pages").bootstrapPaginator(m),$("body").on("click","button#do_like",function(e){e.preventDefault();var t=$("#post_hash").val(),a=$(this).attr("value");$.ajax({type:"POST",url:s,data:{mode:"set_post_like",post_hash:t,val:a},success:function(){window.location=MyHOSTNAME+"thread?"+t}})}),$("body").on("click","button#make_post_status",function(e){e.preventDefault();var t=$("#post_hash").val(),a=$(this).attr("value");$.ajax({type:"POST",url:s,data:{mode:"set_post_status",post_hash:t,val:a},success:function(){window.location=MyHOSTNAME+"thread?"+t}})}),$("body").on("click","button#add_comment",function(e){e.preventDefault();var t=$("#post_hash").val(),a=$("#comment_hash").val(),o=$("#notes").code(),n=$("#mc").prop("checked");$.ajax({type:"POST",url:s,data:{mode:"add_comment",msg:o,ph:t,ch:a,type:n},dataType:"json",success:function(e){console.log(e),$.each(e,function(e,a){1==a.check_error?window.location=MyHOSTNAME+"thread?"+t:0==a.check_error&&$("#post_res").hide().html(a.msg).fadeIn(500)})}})}),$("#notes").summernote({height:200,focus:!1,toolbar:[["style",["bold","italic","underline","clear"]],["fontsize",["fontsize"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["link",["link"]],["codeview",["codeview"]]],onImageUpload:function(e,t,a){i(e[0],t,a)},oninit:function(){}}),1==VALIDATE){var r=document.querySelector("#template");r.id="";var d=r.parentNode.innerHTML;r.parentNode.removeChild(r);var u=$("#comment_hash").val();$("#myid").dropzone({url:s,maxFilesize:100,paramName:"myfile",params:{mode:"upload_post_file",post_hash:u,type:"1",is_tmp:"1"},removedfile:function(e){var t;return null!=(t=e.previewElement)?t.parentNode.removeChild(e.previewElement):void 0},maxThumbnailFilesize:5,previewTemplate:d,previewsContainer:"#previews",autoQueue:!0,maxFiles:50,init:function(){this.on("success",function(e,t){var a=jQuery.parseJSON(t);$.each(a,function(t,a){"ok"==a.status?$(e.previewTemplate).append('<input type="hidden" class="server_file" value="'+a.uniq_code+'">'):"error"==a.status&&$(e.previewTemplate).html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'+a.msg+"</div>").fadeOut(3e3)})}),this.on("removedfile",function(e){var t=$(e.previewTemplate).children(".server_file").val();$.ajax({type:"POST",url:s,data:"mode=delete_post_file&uniq_code="+t,dataType:"html"})}),this.on("addedfile",function(e){console.log(e)}),this.on("drop",function(){})}})}}});