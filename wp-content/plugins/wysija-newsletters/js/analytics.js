(function(l,c){if(!c.__SV){var d,k,h,j;window.mixpanel=c;d=l.createElement("script");d.type="text/javascript";d.async=!0;d.src=("https:"===l.location.protocol?"https:":"http:")+"//cdn.mxpnl.com/libs/mixpanel-2.2.min.js";k=l.getElementsByTagName("script")[0];k.parentNode.insertBefore(d,k);c._i=[];c.init=function(b,i,m){function g(e,o){var f=o.split(".");2==f.length&&(e=e[f[0]],o=f[1]);e[o]=function(){e.push([o].concat(Array.prototype.slice.call(arguments,0)))}}var n=c;"undefined"!==typeof m?n=c[m]=[]:m="mixpanel";n.people=n.people||[];n.toString=function(e){var f="mixpanel";"mixpanel"!==m&&(f+="."+m);e||(f+=" (stub)");return f};n.people.toString=function(){return n.toString(1)+".people (stub)"};h="disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");for(j=0;j<h.length;j++){g(n,h[j])}c._i.push([b,i,m])};c.__SV=1.2}})(document,window.mixpanel||[]);mixpanel.init("f683d388fb25fcf331f1b2b5c4449798");mixpanel.track("Wysija Usage",{"Monthly emails sent":analytics_data.monthly_emails_sent,"Lists with more than 25 subscribers":analytics_data.lists_with_more_than_25,"Confirmed subscribers":analytics_data.confirmed_subscribers,"Unconfirmed subscribers":analytics_data.unconfirmed_subscribers,"Standard newsletters":analytics_data.standard_newsletters,"Auto newsletters":analytics_data.auto_newsletters,"Wordpress Version":analytics_data.wordpress_version,"Plugin Version":analytics_data.plugin_version,"License type":analytics_data.license_type,"Sending method":analytics_data.sending_method,"Smtp hostname":analytics_data.smtp_hostname,"Activation Email":analytics_data.activation_email_status,"Open rate":analytics_data.average_open_rate,"Click rate":analytics_data.average_click_rate,Industry:analytics_data.industry,"Wordpress Language":analytics_data.wordpress_language,Rtl:analytics_data.rtl});