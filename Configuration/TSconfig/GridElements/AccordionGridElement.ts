# === Accordion / Accord Grid Element Configuration ===

tx_gridelements {
  setup {
    t3vContentAccordion {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordionGridElement.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordionGridElement.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/AccordionGridElement.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/AccordionGridElement.svg

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
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.accordGridElement.columns.rows.1.columns.1.name

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