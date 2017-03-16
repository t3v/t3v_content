mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vcontent_spacer {
              title = LLL:EXT:t3v_content/Resources/Private/Language/locallang_wizard.xlf:contentElements.spacerContentElement.title

              description = LLL:EXT:t3v_content/Resources/Private/Language/locallang_wizard.xlf:contentElements.spacerContentElement.description

              icon = EXT:t3v_content/Resources/Public/Icons/ContentElements/SpacerContentElement.svg

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