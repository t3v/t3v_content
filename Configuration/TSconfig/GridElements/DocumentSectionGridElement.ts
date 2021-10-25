# === Document Section Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentDocumentSection {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_ttc.xlf:gridElements.documentSectionGridElement.title
      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_ttc.xlf:gridElements.documentSectionGridElement.description
      flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/DocumentSectionGridElement.xml
      iconIdentifier = t3v_content-document_section_grid_element

      # Use a colored frame as in the record form:
      # `0` = no color
      # `1` = red
      # `2` = green
      # `3` = blue
      # frame = 0

      # The Grid Element can be set as top level only:
      # topLevelLayout = 1

      # A list of IDs of layouts that should not be available in this branch of the page tree:
      # excludeLayoutIds = 1, 2, 3

      # The TSconfig settings have precedence over the layout records with the same ID:
      # overruleRecords = 1

      config {
        colCount = 1
        rowCount = 1

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_ttc.xlf:gridElements.documentSectionGridElement.rows.1.columns.1.name
                colPos = 10
                # allowed =
                # allowedGridTypes =
              }
            }
          }
        }
      }
    }
  }
}
