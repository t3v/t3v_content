# === 3 Columns Layout Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentColumnLayout3Columns {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.columnLayoutGridElement.3Columns.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.columnLayoutGridElement.3Columns.description

      flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/ColumnLayoutGridElement/3Columns.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/ColumnLayoutGridElement/3Columns.svg

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
        colCount = 3

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.columnLayoutGridElement.3Columns.rows.1.columns.1.name

                colPos = 101

                # allowed          =
                # allowedGridTypes =
              }

              2 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.columnLayoutGridElement.3Columns.rows.1.columns.2.name

                colPos = 102

                # allowed          =
                # allowedGridTypes =
              }

              3 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.columnLayoutGridElement.3Columns.rows.1.columns.3.name

                colPos = 103

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