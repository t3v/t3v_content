# === Grid Elements Configuration ===

tx_gridelements {
  setup {
    t3vContentAccordion {
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccordion.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccordion.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/T3vContentAccordion.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/T3vContentAccordion.svg

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
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccordion.rows.1.columns.1.name

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
      title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccord.title

      description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccord.description

      # flexformDS = FILE:EXT:t3v_content/Configuration/FlexForms/GridElements/T3vContentAccord.xml

      icon = EXT:t3v_content/Resources/Public/Icons/GridElements/T3vContentAccord.svg

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
                name = LLL:EXT:t3v_content/Resources/Private/Language/locallang_be.xlf:gridElements.t3vContentAccord.columns.rows.1.columns.1.name

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