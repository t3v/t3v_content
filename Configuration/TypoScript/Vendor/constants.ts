# === Fluid Styled Content (fluid_styled_content) ===

[compatVersion = 7.6]
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Static/constants.txt">

lib {
  fluidContent {
    layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/FluidStyledContent/7.6/

    templateRootPath = EXT:t3v_content/Resources/Private/Templates/FluidStyledContent/7.6/

    partialRootPath = EXT:t3v_content/Resources/Private/Partials/FluidStyledContent/7.6/
  }
}
[global]

[compatVersion = 8.7]
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/constants.txt">

lib {
  contentElement {
    layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/FluidStyledContent/8.7/

    templateRootPath = EXT:t3v_content/Resources/Private/Templates/FluidStyledContent/8.7/

    partialRootPath = EXT:t3v_content/Resources/Private/Partials/FluidStyledContent/8.7/
  }
}

# styles {
#   templates {
#     # cat=content/templates/b3; type=string; label= Path of Fluid Layouts for all defined content elements
#     layoutRootPath =
#
#     # cat=content/templates/b1; type=string; label= Path of Fluid Templates for all defined content elements
#     templateRootPath =
#
#     # cat=content/templates/b2; type=string; label= Path of Fluid Partials for all defined content elements
#     partialRootPath =
#   }
#
#   content {
#     # cat=content/cHeader/h0; type=int[1-5]; label=Default Header type: Enter the number of the header layout to be used by default
#     defaultHeaderType = 2
#
#     shortcut {
#       # cat=content/cShortcut/t0; type=string; label=List of accepted tables
#       tables = tt_content
#     }
#
#     # cat=content/parseFunc/a0; type=string; label=List of allowed HTML tags when rendering RTE content
#     allowTags = a, abbr, acronym, address, article, aside, b, bdo, big, blockquote, br, caption, center, cite, code, col, colgroup, dd, del, dfn, dl, div, dt, em, font, footer, header, h1, h2, h3, h4, h5, h6, hr, i, img, ins, kbd, label, li, link, meta, nav, ol, p, pre, q, samp, sdfield, section, small, span, strike, strong, style, sub, sup, table, thead, tbody, tfoot, td, th, tr, title, tt, u, ul, var
#
#     textmedia {
#       # cat=content/cTextmedia/b1; type=int+; label= Max Image/Media Width: This indicates that maximum number of pixels (width) a block of media elements inserted as content is allowed to consume
#       maxW = 600
#
#       # cat=content/cTextmedia/b2; type=int+; label= Max Image/Media Width (Text): Same as above, but this is the maximum width when text is wrapped around an block of media elements. Default is 50% of the normal Max Media Item Width
#       maxWInText = 300
#
#       # cat=content/cTextmedia/g1; type=int[0-100]; label= Advanced, Column space: Horizontal distance between media elements in a block in content elements of type "Media & Images". If you change this manually in your CSS, you need to adjust this setting accordingly
#       columnSpacing = 10
#
#       # cat=content/cTextmedia/g2; type=int[0-100]; label= Advanced, Row space: Vertical distance after each media elements row in content elements of type ""Text & Media". If you change this manually in your CSS, you need to adjust this setting accordingly
#       rowSpacing = 10
#
#       # cat=content/cTextmedia/g3; type=int[0-100]; label= Advanced, Margin to text: Horizontal distance between an imageblock and text in content elements of type "Text & Images"
#       textMargin = 10
#
#       # cat=content/cTextmedia/i1; type=color; label= Media element border, color: Bordercolor of media elements in content elements when "Border"-option for an element is set
#       borderColor = #000000
#
#       # cat=content/cTextmedia/i2; type=int[0-100]; label= Media element border, thickness: Thickness of border around media elements in content elements when "Border"-option for element is set
#       borderWidth = 2
#
#       # cat=content/cTextmedia/i3; type=int+; label= Media element border, padding: Padding left and right to the media element, around the border
#       borderPadding = 0
#
#       linkWrap {
#         # cat=content/cTextmedia/c2; type=string; label= Click-enlarge Media Height: This specifies the height of the enlarged media element when click-enlarge is enabled
#         height = 600m
#
#         # cat=content/cTextmedia/c1; type=string; label= Click-enlarge Media Width: This specifies the width of the enlarged media element when click-enlarge is enabled
#         width = 800m
#
#         # cat=content/cTextmedia/c3; type=boolean; label= Advanced, New window: If set, every click-enlarged media element will open in it's own popup window and not the current popup window (which may have a wrong size for the media element to fit in)
#         newWindow = 0
#
#         # cat=content/cTextmedia/c4; type=boolean; label= Lightbox click-enlarge rendering: Whether media elements with click-enlarge checked should be rendered lightbox-compliant
#         lightboxEnabled = 0
#
#         # cat=content/cTextmedia/c5; type=string; label= Lightbox CSS class: Which CSS class to use for lightbox links (only applicable if lightbox rendering is enabled)
#         lightboxCssClass = lightbox
#
#         # cat=content/cTextmedia/c6; type=string; label= Lightbox rel="" attribute: Which rel="" attribute to use for lightbox links (only applicable if lightbox rendering is enabled)
#         lightboxRelAttribute = lightbox[{field:uid}]
#       }
#     }
#
#     links {
#       # cat=content/links/l2; type=small; label= Target for external links
#       extTarget = _blank
#
#       # cat=content/links/l3; type=string; label= Parts to keep when building links: Comma separated list of the link parts to show when building the link-text: scheme,path,query. Example: "" (empty) => www.example.com, "scheme,path" => http://www.example.com
#       keep = path
#     }
#   }
# }
[global]

# === Grid Elements (gridelements) ===

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gridelements/Configuration/TypoScript/constants.ts">