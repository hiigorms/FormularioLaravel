ckKnownFolderMove_Pres">
        <dropdownList refId="BlockKnownFolderMove_Dropdown" noSort="true" defaultItem="0">Om du vill behålla mapparna omdirigerade till OneDrive för användare som redan har flyttat sina kända mappar:</dropdownList>
      </presentation>

      <presentation id="KFMOptInWithWizard_Pres">
        <textBox refId="KFMOptInWithWizard_TextBox">
          <label>Klientorganisations-ID:</label>
        </textBox>
      </presentation>

      <presentation id="KFMOptInNoWizard_Pres">
        <textBox refId="KFMOptInNoWizard_TextBox">
          <label>Klientorganisations-ID:</label>
        </textBox>
        <dropdownList refId="KFMOptInNoWizard_Dropdown" noSort="true" defaultItem="0">Visa aviseringar för användare när mappar har omdirigerats:</dropdownList>
        <text>Mappalternativ:</text>
        <checkBox refId="KFMOptInNoWizard_Desktop_Checkbox" defaultChecked="true">Skrivbord</checkBox>
        <checkBox refId="KFMOptInNoWizard_Documents_Checkbox" defaultChecked="true">Dokument</checkBox>