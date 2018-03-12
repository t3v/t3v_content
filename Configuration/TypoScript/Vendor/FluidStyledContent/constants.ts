# ----------------------------------
# | Fluid Styled Content Constants |
# ----------------------------------

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Static/constants.txt">

lib {
  fluidContent {
    layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/Vendor/FluidStyledContent/7.6/

    templateRootPath = EXT:t3v_content/Resources/Private/Templates/Vendor/FluidStyledContent/7.6/

    partialRootPath = EXT:t3v_content/Resources/Private/Partials/Vendor/FluidStyledContent/7.6/
  }
}

styles {
  content {
    # cat=content/cHeader/h0; type=int[1-5]; label=Default Header type: The number of the header layout to be used by default.
    # defaultHeaderType = 2

    shortcut {
      # cat=content/cShortcut/t0; type=string; label=List of accepted tables.
      # tables = tt_content, tt_address, tt_news, tx_news_domain_model_news
    }

    # cat=content/parseFunc/a0; type=string; label=List of allowed HTML tags when rendering RTE content.
    # allowTags = a, abbr, acronym, address, article, aside, b, bdo, big, blockquote, br, caption, center, cite, code, col, colgroup, dd, del, dfn, div, dl, dt, em, font, footer, h1, h2, h3, h4, h5, h6, header, hr, i, img, ins, kbd, label, li, link, meta, nav, ol, p, pre, q, samp, sdfield, section, small, span, strike, strong, style, sub, sup, table, tbody, td, tfoot, th, thead, title, tr, tt, u, ul, var

    textmedia {
      # cat=content/cTextmedia/b1; type=int+; label=Max Image/Media Width: This indicates that maximum number of pixels (width) a block of media elements inserted as content is allowed to consume.
      # maxW = 600

      # cat=content/cTextmedia/b2; type=int+; label=Max Image/Media Width (Text): Same as above, but this is the maximum width when text is wrapped around an block of media elements. The default is 50% of the normal max media item width.
      # maxWInText = 300

      # cat=content/cTextmedia/g1; type=int[0-100]; label=Advanced, Column space: Horizontal distance between media elements in a block in content elements of type `Media & Images`. If you change this manually in your CSS, you need to adjust this setting accordingly.
      # columnSpacing = 10

      # cat=content/cTextmedia/g2; type=int[0-100]; label=Advanced, Row space: Vertical distance after each media elements row in content elements of type `Text & Media`. If you change this manually in your CSS, you need to adjust this setting accordingly.
      # rowSpacing = 10

      # cat=content/cTextmedia/g3; type=int[0-100]; label=Advanced, Margin to text: Horizontal distance between an image block and text in content elements of type `Text & Images`.
      # textMargin = 10

      # cat=content/cTextmedia/i1; type=color; label=Media element border, Color: Border-color of media elements in content elements when `Border` option for an element is set.
      # borderColor = black

      # cat=content/cTextmedia/i2; type=int[0-100]; label=Media element border, Thickness: Thickness of border around media elements in content elements when `Border` option for element is set.
      # borderWidth = 2

      # cat=content/cTextmedia/i3; type=int+; label=Media element border, Padding: Padding left and right to the media element, around the border.
      # borderPadding = 0

      linkWrap {
        # cat=content/cTextmedia/c2; type=string; label=Click-enlarge Media Height: This specifies the height of the enlarged media element when click-enlarge is enabled.
        height = 768m

        # cat=content/cTextmedia/c1; type=string; label=Click-enlarge Media Width: This specifies the width of the enlarged media element when click-enlarge is enabled.
        width = 1024m

        # cat=content/cTextmedia/c3; type=boolean; label=Advanced, New window: If set, every click-enlarged media element will open in it's own popup window and not the current popup window (which may have a wrong size for the media element to fit in).
        # newWindow = 0

        # cat=content/cTextmedia/c4; type=boolean; label=Lightbox click-enlarge rendering: Whether media elements with click-enlarge checked should be rendered Lightbox compliant.
        lightboxEnabled = 1

        # cat=content/cTextmedia/c5; type=string; label=Lightbox CSS class: Which CSS class to use for Lightbox links (only applicable if Lightbox rendering is enabled).
        lightboxCssClass = link--media link

        # cat=content/cTextmedia/c6; type=string; label=Lightbox rel attribute: Which rel attribute to use for Lightbox links (only applicable if Lightbox rendering is enabled).
        lightboxRelAttribute = lightbox[{field:uid}]
      }
    }

    links {
      # cat=content/links/l1; type=small; label=Target for internal links: Should match the name of the content PAGE-object in TypoScript when used with frames. Most cases: set to empty. If you have frames in the template set to `page`.
      # target =

      # cat=content/links/l2; type=small; label=Target for external links.
      # extTarget = _blank

      # cat=content/links/l3; type=string; label= Parts to keep when building links: Comma separated list of the link parts to show when building the link-text: `scheme`, `path` or `query`. Example: `` (empty) => `www.example.com`, `scheme, path` => `http://www.example.com`.
      # keep = path
    }
  }
}