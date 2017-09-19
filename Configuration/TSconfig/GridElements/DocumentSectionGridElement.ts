# === Document Section Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentDocumentSection {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.documentSectionGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.documentSectionGridElement.description

      flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/DocumentSectionGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/DocumentSectionGridElement.svg

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
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.documentSectionGridElement.rows.1.columns.1.name

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