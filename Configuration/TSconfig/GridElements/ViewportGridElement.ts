# === Grid Elements Configuration ===

tx_gridelements {
  setup {
    t3vContentViewport {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.viewportGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.viewportGridElement.description

      flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/ViewportGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/ViewportGridElement.svg

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
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.viewportGridElement.rows.1.columns.1.name

                colPos = 10

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