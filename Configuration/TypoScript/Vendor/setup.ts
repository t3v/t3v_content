# === Fluid Styled Content (fluid_styled_content) ===

[compatVersion = 7.6]
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Static/setup.txt">

lib {
  fluidContent {
    layoutRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Layouts/

      10 = {$lib.fluidContent.layoutRootPath}
    }

    templateRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Templates/

      10 = {$lib.fluidContent.templateRootPath}
    }

    partialRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Partials/

      10 = {$lib.fluidContent.partialRootPath}
    }
  }
}
[global]

[compatVersion = 8.7]
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/setup.txt">

# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Helper/ContentElement.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/Helper/ParseFunc.txt">

# --- Content element rendering ---

# tt_content {
#   stdWrap {
#     # Setup the edit panel for all content elements
#     editPanel = 1
#     editPanel {
#       allow = move, new, edit, hide, delete
#
#       label = %s
#
#       onlyCurrentPid = 1
#
#       previewBorder = 1
#
#       edit {
#         displayRecord = 1
#       }
#     }
#   }
# }

# --- Typical content elements ---

# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Bullets.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Div.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Header.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Html.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Image.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/List.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Shortcut.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Table.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Text.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Textmedia.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Textpic.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/Uploads.txt">

# --- Menu content elements ---

# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuAbstract.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuCategorizedContent.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuCategorizedPages.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuPages.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuSubpages.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuSection.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuSectionPages.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuRecentlyUpdated.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuRelatedPages.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuSitemap.txt">
# <INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/TypoScript/ContentElement/MenuSitemapPages.txt">

lib {
  contentElement {
    layoutRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Layouts/

      10 = {$lib.contentElement.layoutRootPath}
    }

    templateRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Templates/

      10 = {$lib.contentElement.templateRootPath}
    }

    partialRootPaths {
      0 = EXT:fluid_styled_content/Resources/Private/Partials/

      10 = {$lib.contentElement.partialRootPath}
    }
  }
}
[global]

# === Grid Elements (gridelements) ===

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gridelements/Configuration/TypoScript/setup.ts">

# tt_content {
#   gridelements_pi1 >
#
#   gridelements_pi1 = COA
#   gridelements_pi1 {
#     # 10 =< lib.stdheader
#
#     20 = COA
#     20 {
#       10 = USER
#       10 {
#         userFunc = GridElementsTeam\Gridelements\Plugin\Gridelements->main
#
#         setup {
#           default < lib.gridelements.defaultGridSetup
#         }
#       }
#     }
#   }
# }