# === Conditionally Grid Element Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentConditionally < lib.gridelements.defaultGridSetup
          t3vContentConditionally {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/ConditionallyGridElement.html
              layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/
              partialRootPath = EXT:t3v_content/Resources/Private/Partials/
            }

            outerWrap = |
          }
        }
      }
    }
  }
}
