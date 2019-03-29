data:text/html;charset=utf-8,
<html><title >Heuristic History Hysterics scURIple</title>
<!-- 
http://stackoverflow.com/questions/13369829/access-my-entire-browsing-history-via-javascript
                                                                                               /22773361# 22773361                       -->
<!-- 
   - scURIples (scriples) are generic schema (data:, javascript:, place:, ... ) URI that embed script
   - data: scURIples (scriples) are amenable to direct cut & paste URI address bar evaluation
   - generally no particular distinction is made between scURIples of different schema,
       such as this data: schema URI, but ... 
   - javascript: schema specific scURIples are called scriplets or bookmarklets                                -->
<!-- 
   a bookmark of this data: scURIple or its internal javascript: scriplet does the same thing             -->
<!--
  a place[s]: schema URI "works" from a bookmark only and not the address bar or a hyperlink      -->
<!-- for internal use only (by the scURIbbler used to edit this script):  
       javascript: with ( opener . document . forms[0] . JS ) value = 
                                        value . replace(  /\t|\n/g, function(c){ return escape(c) + c } )  ; close();//  
       scURIples are unscURIpulous 
              NB. no raw tabs, % 09 's collapse to null, quote raw %'s w/ non-numerics, };'s ,  ...             -->
<script>
    javascript:

        String.prototype.HTMLtagWrap   =
            function ( tag,  attrs)  {
                return  tag[0]=="/" ?
                    "<"  +tag+                                ">"  +this+  "<"  +tag.substr(1)+  (attrs?" "+attrs:"") +  ">"    :
                    "<"  +tag+ (attrs?" "+attrs:"") + ">"  +this+  "</"  +tag+                                                 ">"
            }  ;

    String.prototype.HTMLwrapTags =
        function ( tagRA, atRA) {
            return tagRA[0] ? this . HTMLtagWrap( tagRA.pop(), atRA.pop()) . HTMLwrapTags( tagRA, atRA)
                :  this
        }  ;

    /* alert */ ( str =
            ( function(x){return x.HTMLtagWrap('title') + x.HTMLwrapTags(['/pre','center','b'] , [ ] ) }
                ('Heuristic History Hysterics')+
                '1. '.HTMLtagWrap('b') +
                '<input     id=URIplcQry     type=text    size=120  ' +
                'value="place:queryType=0&sort=8&maxResults=25" >\n' +
                'suggestions:\t try just a raw place: with no corpus or places: (undocumented with an s)\n' +
                'auto attribution:\t' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=sort=4                        >  \t' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=type=5                       >  \t' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=queryType=1            >\t  ' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=domain=""                 >\t  ' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=includeHidden=true  >\t   ' +
                '<input type=button onclick=URIplcQry.value+="&"+this.value  value=onlyBookmarked=true >\t' +
                '\n\n2. '.HTMLtagWrap('b') +
                'This link bookmarks the place: URI from step 1: '  +
                'place: query URI href results' .
                HTMLtagWrap(  'A',
                    ' href="places:"  rel="sidebar"  title="hystryx  " id="hystryx  " ' +
                    ' onmouseover ="with(this)title=id+(href=document.forms[0].URIplcQry.value)"  '
                ) +
                '\t(hint: to see the actual link, mouse over it 2x)'  +
                '\n\n3. '.HTMLtagWrap('b',   ' style="vertical-align:top;" '  ) +
                ( '\n\t\t\tINSTRUCTIONS\n\n' +
                    '1. make the href place: query for the link in step 2. \n' +
                    '2. click the link to create a bookmark that accesses the URI library\n' +
                    '3. drag & drop the new bookmark (aka a container) here (replace this content)\n' +
                    '4. cleanup and delete the new bookmark if desired\n'  +
                    '5. to be done: add a scURIbbler to massage this textarea\n'  +
                    '\n\n' +
                    'tested with userAgent:\t\t\t\t'  +
                    'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.0.4) Gecko/2008102920 Firefox/3.0.4'  +
                    '(Splashtop-v1.2.17.0) \n'  +
                    '\twindow.navigator.userAgent =\t\t'  + window.navigator.userAgent +
                    '\n '
                ) .HTMLtagWrap('textarea', 'id=histURIs  rows=12 cols=120 nowrap') +
                '\n\n4. ...'.HTMLtagWrap('b') +
                '\n\n5. '.HTMLtagWrap('b') +
                'scURIbbler:  <input   type=text    size=120  id=histURIpg ' +
                ' value="javascript:with(opener)with(document.forms[0]) '                                              +
                ' ( URIplcQry.value.HTMLtagWrap(\'b\') + '                                                                  +
                ' histURIs.value.replace(/^.*$/g,function(m){return m.link(m)}) '                              +
                '  ).HTMLwrapTags( \'html pre\'.split(/ +/) , [ ] ) '                                                                     +
                ' "><input type=button value="open histURIs" onclick=window.open(histURIpg.value )>  ' +
                '  '
            )  .  HTMLwrapTags ( ["html", "form", "pre"] , [ ] )
    );

    /*
    window.open (    "data:text/html;charset=utf-8,"  +  str . replace ( /\n/g,  '%'+'0A ' )        );
    */
    document.write ( str );

</script>
</html>