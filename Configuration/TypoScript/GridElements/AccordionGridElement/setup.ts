# === Accordion / Accord Grid Element Content Records Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentAccordion < lib.gridelements.defaultGridSetup
          t3vContentAccordion {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/AccordionGridElement.html

              layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/GridElements/

              partialRootPath = EXT:t3v_content/Resources/Private/Partials/GridElements/
            }

            outerWrap = |
          }

          t3vContentAccord < lib.gridelements.defaultGridSetup
          t3vContentAccord {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/AccordGridElement.html

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