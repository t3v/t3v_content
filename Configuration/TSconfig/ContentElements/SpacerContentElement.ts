mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vcontent_spacer {
              title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_wizard.xlf:contentElements.spacerContentElement.title

              description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_wizard.xlf:contentElements.spacerContentElement.description

              iconIdentifier = t3v_content-spacer_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vcontent_spacer
              }
            }
          }

          show := addToList(t3vcontent_spacer)
        }
      }
    }
  }
}