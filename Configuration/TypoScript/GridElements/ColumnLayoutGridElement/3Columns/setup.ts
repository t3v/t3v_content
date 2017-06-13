# === Content Records Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentColumnLayout3Columns < lib.gridelements.defaultGridSetup
          t3vContentColumnLayout3Columns {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/ColumnLayoutGridElement/3Columns.html

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