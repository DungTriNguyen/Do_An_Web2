<?xml version="1.0" encoding="UTF-16"?>
<Task version="1.2" xmlns="http://schemas.microsoft.com/windows/2004/02/mit/task">
  <RegistrationInfo>
    <Author>ASUSTeK COMPUTER INC.</Author>
    <URI>\ASUS Update Checker 2.0</URI>
  </RegistrationInfo>
  <Principals>
    <Principal id="ALU_Principal">
      <GroupId>S-1-5-32-544</GroupId>
      <RunLevel>HighestAvailable</RunLevel>
    </Principal>
  </Principals>
  <Settings>
    <DisallowStartIfOnBatteries>false</DisallowStartIfOnBatteries>
    <StopIfGoingOnBatteries>false</StopIfGoingOnBatteries>
    <ExecutionTimeLimit>PT0S</ExecutionTimeLimit>
    <MultipleInstancesPolicy>IgnoreNew</MultipleInstancesPolicy>
    <StartWhenAvailable>true</StartWhenAvailable>
    <IdleSettings>
      <Duration>PT10M</Duration>
      <WaitTimeout>PT1H</WaitTimeout>
      <StopOnIdleEnd>false</StopOnIdleEnd>
      <RestartOnIdle>false</RestartOnIdle>
    </IdleSettings>
  </Settings>
  <Triggers>
    <LogonTrigger id="ALU_Trigger">
      <Delay>PT1H</Delay>
      <Repetition>
        <Interval>PT1H</Interval>
      </Repetition>
    </LogonTrigger>
    <RegistrationTrigger id="Repeat_Trigger">
      <Delay>PT1H</Delay>
      <Repetition>
        <Interval>PT1H</Interval>
      </Repetition>
    </RegistrationTrigger>
  </Triggers>
  <Actions Context="ALU_Principal">
    <Exec>
      <Command>"C:\WINDOWS\System32\DriverStore\FileRepository\asussci2.inf_amd64_add427665a6c072f\ASUSSoftwareManager\AsusUpdateChecker.exe"</Command>
    </Exec>
  </Actions>
</Task>                                                                                                                                                                                                                                                                                                                                                                                                  �