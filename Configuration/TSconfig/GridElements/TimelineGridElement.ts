# === Timeline / Event Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentTimeline {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.timelineGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.timelineGridElement.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/TimelineGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/TimelineGridElement.svg

      # Frame settings
      # frame = 1

      # Top Level Layout
      # topLevelLayout = 1

      # Denied elements
      # excludeLayoutIds = 1,2,3

      # TSConfig winning
      # overruleRecords = 1

      config {
        colCount = 1
        rowCount = 1

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.timelineGridElement.rows.1.columns.1.name

                colPos = 10

                allowed          = gridelements_pi1
                allowedGridTypes = t3vContentEvent
              }
            }
          }
        }
      }
    }

    t3vContentEvent {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.eventGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.eventGridElement.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/EventGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/EventGridElement.svg

      # Frame settings
      # frame = 1

      # Top Level Layout
      # topLevelLayout = 1

      # Denied elements
      # excludeLayoutIds = 1,2,3

      # TSConfig winning
      # overruleRecords = 1

      config {
        colCount = 1
        rowCount = 2

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.eventGridElement.rows.1.columns.1.name

                colPos = 10

                # allowed          =
                # allowedGridTypes =
              }
            }
          }

          2 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.eventGridElement.rows.2.columns.1.name

                colPos = 20

                # allowed          =
                # allowedGridTypes =
              }
            }
          }
        }
      }
    }
  }
}