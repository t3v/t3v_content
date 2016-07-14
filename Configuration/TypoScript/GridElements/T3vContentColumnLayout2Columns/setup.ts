# === Content Records Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentColumnLayout2Columns < lib.gridelements.defaultGridSetup
          t3vContentColumnLayout2Columns {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/T3vContentColumnLayout2Columns.html
            }

            outerWrap = |
          }
        }
      }
    }
  }
}