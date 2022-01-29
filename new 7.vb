Public Class Form1
    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim a = InputBox("Please give an hour (like 12:00)")
        Dim splitted = a.Split(":")(0)
        Dim splitted2 = a.Split(":")(1)
        Dim percent = splitted / 24 * 100 + splitted2 / 60
        Dim laststep = percent & "%" & " of day is completed..."
        If splitted > 24 Or splitted2 > 59 Then
            MsgBox("Check your input.")
        Else
            MsgBox(laststep)
        End If

    End Sub
End Class