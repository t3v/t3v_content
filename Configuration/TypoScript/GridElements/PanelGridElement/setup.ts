# === Panel Grid Element Content Records Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentPanel < lib.gridelements.defaultGridSetup
          t3vContentPanel {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/PanelGridElement.html

              layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/GridElements/

              partialRootPath = EXT:t3v_content/Resources/Private/Partials/GridElements/
            }

            outerWrap = |
          }
        }
      }
    }
  }
}