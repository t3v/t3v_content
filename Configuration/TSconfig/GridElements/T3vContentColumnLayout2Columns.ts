# === Grid Elements Configuration ===

tx_gridelements {
  setup {
    t3vContentColumnLayout2Columns {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentColumnLayout2Columns.title

      flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/T3vContentColumnLayout2Columns.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/T3vContentColumnLayout2Columns.svg

      # Frame settings
      # frame = 1

      # Top Level Layout
      # topLevelLayout = 1

      # Denied elements
      # excludeLayoutIds = 1,2,3

      # TSConfig winning
      # overruleRecords = 1

      config {
        rowCount = 1

        colCount = 2

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentColumnLayout2Columns.columns.1.name

                colPos = 101

                # allowed = text
              }

              2 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentColumnLayout2Columns.columns.2.name

                colPos = 102

                # allowed = text
              }
            }
          }
        }
      }
    }
  }
}