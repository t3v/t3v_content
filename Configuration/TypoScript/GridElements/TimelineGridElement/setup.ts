# === Timeline / Event Grid Element Configuration ===

tt_content {
  gridelements_pi1 {
    20 {
      10 {
        setup {
          t3vContentTimeline < lib.gridelements.defaultGridSetup
          t3vContentTimeline {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/TimelineGridElement.html
              layoutRootPath = EXT:t3v_content/Resources/Private/Layouts/
              partialRootPath = EXT:t3v_content/Resources/Private/Partials/
            }

            outerWrap = |
          }

          t3vContentEvent < lib.gridelements.defaultGridSetup
          t3vContentEvent {
            cObject = FLUIDTEMPLATE
            cObject {
              file = EXT:t3v_content/Resources/Private/Templates/GridElements/EventGridElement.html
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