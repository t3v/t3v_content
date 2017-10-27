# === Accordion / Accord Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentAccordion {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordionGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordionGridElement.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/AccordionGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/AccordionGridElement.svg

      # Use a colored frame as in the record form:
      # `0` = no color
      # `1` = red
      # `2` = green
      # `3` = blue
      # frame = 0

      # If this option is set the Grid Element can be set as top level only.
      # topLevelLayout = 1

      # A list of IDs of layouts that should not be available in this branch of the page tree.
      # excludeLayoutIds = 1,2,3

      # Set this value to `1`, when you want TSconfig settings to have precendence over layout records with the same ID.
      # overruleRecords = 1

      config {
        colCount = 1
        rowCount = 1

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordionGridElement.rows.1.columns.1.name

                colPos = 10

                allowed          = gridelements_pi1
                allowedGridTypes = t3vContentAccord
              }
            }
          }
        }
      }
    }

    t3vContentAccord {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordGridElement.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/AccordGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/AccordGridElement.svg

      # Use a colored frame as in the record form:
      # `0` = no color
      # `1` = red
      # `2` = green
      # `3` = blue
      # frame = 0

      # If this option is set the Grid Element can be set as top level only.
      # topLevelLayout = 1

      # A list of IDs of layouts that should not be available in this branch of the page tree.
      # excludeLayoutIds = 1,2,3

      # Set this value to `1`, when you want TSconfig settings to have precendence over layout records with the same ID.
      # overruleRecords = 1

      config {
        colCount = 1
        rowCount = 1

        rows {
          1 {
            columns {
              1 {
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordGridElement.rows.1.columns.1.name

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